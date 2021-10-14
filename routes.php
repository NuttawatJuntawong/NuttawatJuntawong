<?php
$controllers = array('pages'=>['home','error'],
                    
                    'staff'=>['index', 'newStaff', 'addStaff', 'search', 'updateForm', 'update', 'deleteConfirm', 'delete'],
                    'staffposition'=>['index', 'newStaffposition', 'addStaffposition', 'search', 'updateForm', 'update', 'deleteConfirm', 'delete']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    switch($controller){
        case "pages": $controller = new PagesController();
                      break;
        
        case "staff" : require_once("./models/staffModel.php");
                           $controller = new StaffController();
                           break;
        
        case "staffposition" : require_once("./models/staffpositionModel.php");
                            $controller = new StaffpositionController();
                            break;


    }$controller->{$action}();
}

if(array_key_exists($controller,$controllers)){
    if(in_array($action,$controllers[$controller]))
        call($controller,$action);
    else
        call('pages','error');
}
else{
    call('pages','error');
}
