<?php
//Hpme Route
$app->get('/', App\Action\HomeAction::class)
    ->setName('USSD API - Ultra-Med');
//System
include_once dirname(__FILE__). '/../app/src/system/System.php';
include_once dirname(__FILE__). '/../app/src/system/Admin.php';
include_once dirname(__FILE__). '/../app/src/system/MembershipNumber.php';

//API  Routes
$op = new System();
$admin = new Admin();
$memb = new MembershipNumber();

$app->group('/api/v1/ussd/subscriptions', function ($group) use ($op, $app) {
    $group->get('/packages', function($request,  $response)use($op) {
        $packages = $op->packages();
        return $response->withJson($packages)->withStatus($packages['statusCode']);
    });

});

//member routes
$app->group('/api/v1/ussd/member', function ($group)use($op, $memb){

    $group->post('/login', function ($request, $response)use($op){
        $params = $request->getParsedBody();
        $op->setMsisdn($op->escape_data($params['msisdn']));
        $op->setPin($op->escape_data($params['pin']));
        $login = $op->login();
        return $response
            ->withJson($login)
            ->withStatus($login['statusCode']);
    });

    $group->put('/register', function($request, $response)use($op, $memb) {
        $params = $request->getParsedBody();
        $mobile = $op->validateParameter('MSISDN', $params['msisdn'],'mobile');
        $pin = $op->validateParameter('Pin',$params['pin'], STRING);
        $name = $op->validateParameter('First Name',$params['name'],STRING);
        $lastName = $op->validateParameter('Last Name',$params['surname'],STRING);
        $ID = $op->validateParameter('National ID',$params['ID'],STRING);
        $dob = $op->validateParameter('Date of Birth',date('Y-m-d', strtotime($params['D.O.B'])),STRING);
        $sex = $op->validateParameter('Gender',$params['gender'],STRING);
        $address = $op->validateParameter('Address',$params['address'],STRING);
        $town = $op->validateParameter('Town',$params['town'],'town');
        $package = $op->validateParameter('Medical Package',$params['package'],'package');

        if($name['success'] == true){
            $op->setName($name['data']);
        }else{
            return $response
                ->withJson($name)
                ->withStatus($name['statusCode']);
        }

        if ($lastName['success'] == true){
            $op->setLastName($lastName['data']);
        }else{
            return $response
                ->withJson($lastName)
                ->withStatus($lastName['statusCode']);
        }

        if ($address['success'] == true){
            $op->setAddress($address['data']);
        }else{
            return $response
                ->withJson($address)
                ->withStatus($address['statusCode']);
        }

        if ($ID['success'] == true){
            $op->setNationID($ID['data']);
        }else{
            return $response
                ->withJson($ID)
                ->withStatus($ID['statusCode']);
        }

        if ($dob['success'] == true){
            $op->setDob($dob['data']);
        }else{
            return $response
                ->withJson($dob)
                ->withStatus($dob['statusCode']);
        }
        if ($mobile['success'] == true){
            $op->setMsisdn($mobile['data']);
        }else{
            return $response
                ->withJson($mobile)
                ->withStatus($mobile['statusCode']);
        }
        if ($town['success']){
            $op->setTown($town['data']);
        }else{
            return $response
                ->withJson($town)
                ->withStatus($town['statusCode']);
        }
        if ($pin['success']){
            $op->setPin($pin['data']);
        }else{
            return $response
                ->withJson($pin)
                ->withStatus($pin['statusCode']);
        }
        if ($package['success'] == true){
            $op->setPackage("0".$package['data']);
        }else{
            return $response
                ->withJson($package)
                ->withStatus($package['statusCode']);
        }
        if ($sex['success'] == true){
            $op->setGender($sex['data']);
        }else{
            return $response
                ->withJson($sex)
                ->withStatus($sex['statusCode']);
        }

        $register = $op->memberRegister();

        return $response
            ->withJson($register)
            ->withStatus($register['statusCode']);
    });

    $group->post('/details', function ($request, $response)use($op){
        $params = $request->getParsedBody('token');
        $op->setTkn($params['token']);
        $details = $op->getDetails();

        return $response
            ->withJson($details)
            ->withStatus($details['statusCode']);
    });

    $group->patch('/add/dependant', function($request, $response)use($op) {
        $params = $request->getParsedBody();
        /*
         * data validation needed here
         */
        $name = $op->escape_data($params['name']);
        $lastName = $op->escape_data($params['surname']);
        $ID = $op->escape_data($params['ID']);
        $dob = $op->escape_data(date('Y-m-d', strtotime($params['D.O.B'])));
        $sex = $op->escape_data($params['gender']);

        $op->setTkn($params['token']);
        $op->setName($name);
        $op->setLastName($lastName);
        $op->setNationID($ID);
        $op->setDob($dob);
        $op->setGender($sex);

        $add = $op->addDependant();

        return $response
            ->withJson($add)
            ->withStatus($add['statusCode']);
    });

    //monthly subscription
    $group->post('/subscribe', function($request, $response)use($op) {
        $params = $request->getParsedBody();
        $amount = $op->escape_data($params['amount']);
        $bill = $params['bill'];
        $confirmation = $op->escape_data($params['confirmCode']);
        $method = $op->escape_data($params['method']);

        $op->setBill($bill);
        $op->setConfirmation($confirmation);
        $op->setAmount($amount);
        $op->setMethod($method);
        $subscribe = $op->subscribe();

        return $response
            ->withJson($subscribe)
            ->withStatus($subscribe['statusCode']);
    });

    //change pin
    $group->patch('/settings/pin/change', function($request, $response)use($op){
        $params = $request->getParsedBody();

        $op->setTkn($params['token']);
        $op->setPin($params['pin']);
        $op->setNewPin($params['newPin']);

        $data = $op->changePin();
        return $response
            ->withJson($data)
            ->withStatus($data['statusCode']);
    });

    $group->post('/subscription/amount/due', function ($request, $response)use($op){
        $params = $request->getParsedBody();
        $token = $params['token'];
        $op->setTkn($token);
        $bill = $op->getSubscriptionBill();

        return $response
            ->withJson($bill)
            ->withStatus($bill['statusCode']);

    });
});

//admin routes
$app->group('/api/v1/dashboard/admin', function ($group)use($admin){

    $group->post('/login', function ($request, $response)use($admin ){
        $params = $request->getParsedBody();
        $email = $admin->validateParameter('Email', $params['email'], 'email');
        $password = $admin->validateParameter('Password', $params['password'], STRING);

        if ($email['success'] == false){
            return $response
                ->withJson($email)
                ->withStatus($email['statusCode']);
        }

        if ($password['success'] == false){
            return $response->withJson($password)
                ->withStatus($password['statusCode']);
        }
        $admin->setEmail($email['data']);
        $admin->setPassword($password['data']);
        $login = $admin->login();

        return $response
            ->withJson($login)
            ->withStatus($login['statusCode']);
    });

    $group->put('/create', function($request, $response)use($admin){
        $params = $request->getParsedBody();

        $email = $admin->validateParameter('Email', $params['email'], 'email');
        $password = $admin->validateParameter('Password', $params['password'], STRING);
        $confirmPassword = $admin->validateParameter('Confirm Password', $params['confirmPassword'], STRING);
        $permission = $admin->validateParameter('Account Permissions', $params['permission'], INTEGER);
        $dept = $admin->validateParameter('Department', $params['dept'], INTEGER);

        if ($email['success'] == false){
            return $response
                ->withJson($email)
                ->withStatus($email['statusCode']);
        }

        if ($password['success'] == false){
            return $response
                ->withJson($password)
                ->withStatus($password['statusCode']);
        }

        if ($confirmPassword['success'] == false){
            return $response
                ->withJson($confirmPassword)
                ->withStatus($confirmPassword['statusCode']);
        }

        if ($permission['success'] == false){
            return $response
                ->withJson($permission)
                ->withStatus($permission['statusCode']);
        }

        if ($dept['success'] == false){
            return $response
                ->withJson($dept)
                ->withStatus($dept['statusCode']);
        }

        if ($password['data'] != $confirmPassword['data']) {
            $data =  array('success' => false, 'statusCode' => FORBIDEN, 'error'=> array('type' => "PARAMETER_ERROR", 'message' => 'Password do not match'));
            return $response
                ->withJson($$data)
                ->withStatus($$data['statusCode']);
        }

        $admin->setEmail($email['data']);
        $admin->setPassword($password['data']);
        $admin->setPermission($permission['data']);
        $admin->setDept($dept['data']);
        $register = $admin->create();

        return $response
            ->withJson($register)
            ->withStatus($register['statusCode']);
    });

    $group->patch('/account/edit', function($request, $response)use($admin){
        $params = $request->getParsedBody();

        $name = $admin->validateParameter('First Name', $params['name'], STRING);
        $lastName = $admin->validateParameter('Last Name', $params['lastName'], STRING);

        if ($name['success'] == false){
            return $response
                ->withJson($name)
                ->withStatus($name['statusCode']);
        }

        if ($lastName['success'] == false){
            return $response
                ->withJson($lastName)
                ->withStatus($lastName['statusCode']);
        }

        $admin->setName($name['data']);
        $admin->setLastName($lastName['data']);
        $save = $admin->edit();

        return $response
            ->withJson($save)
            ->withStatus($save['statusCode']);
    });

    $group->get('/accounts', function($request, $response)use($admin){

        $admins = $admin->adminAll();

        return $response
            ->withJson($admins)
            ->withStatus($admins['statusCode']);
    });

    $group->get('/members/all', function($request, $response)use($admin){

        $admins = $admin->membersAll();
        return $response
            ->withJson($admins)
            ->withStatus($admins['statusCode']);
    });

});

// api authentication get token login
$app->post('/auth/login', function ($request, $response, array $args)use($admin) {

    $params = $request->getParsedBody();
    $settings = $this->get('settings');

    $admin->setEmail($params['email']);
    $admin->setPassword($params['password']);
    $admin->setSecret($settings['jwt']['secret']);

    $auth = $admin->apiLogin();
    return $response->withJson($auth)
        ->withStatus($auth['statusCode']);

});

//add api user account
$app->post('/auth/user/create', function ($request, $response, array $args)use($admin) {

    $params = $request->getParsedBody();
    $admin->setEmail($params['email']);
    $admin->setName($params['name']);
    $admin->setLastName($params['surname']);
    if ($params['password'] !== $params['confirmPassword']){
        return $response->withJson(array('statusCode' => FORBIDEN, 'error' => array('type' => 'PARAMETER_ERROR', 'message' => 'Passwords do not match')))
            ->withStatus(FORBIDEN);
    }
    $admin->setPassword($params['password']);
    $reg = $admin->apiUserCreate();
    return $response->withJson($reg)
        ->withStatus($reg['statusCode']);

});

$app->get('/api/random/string/{len}', function($request, $response)use($op){
    return $response->withJson(array('key' => $op->createString($request->getAttribute('len'))));
});