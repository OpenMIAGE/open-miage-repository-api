<?php

Import::php("OpenM-Services.api.OpenM_Service");

/**
 *
 * @package OpenM 
 * @subpackage OpenM\OpenM-Repository\api
 * @author Gaël Saunier
 */
interface OpenM_Repository extends OpenM_Service {
    
    const RETURN_ERROR_MESSAGE_QUOTA_EXEEDED_VALUE = "Quota exeeded";
    const RETURN_FILE_ID_PARAMETER = "FILE_ID";
    const RETURN_FILE_CONTENT_PARAMETER = "FILE_CONTENT";
    const RETURN_SPACE_USED_PARAMETER = "SPACE_USED";
    const RETURN_FREE_SPACE_PARAMETER = "FREE_SPACE";
    
    const RETURN_ERROR_MESSAGE_FILE_OPENING_VALUE = "un error occured during opening file operation";
    const RETURN_ERROR_MESSAGE_FILE_WRITTING_VALUE =  "un error occured during writting file operation";
    const RETURN_ERROR_MESSAGE_FILE_REMOVING_VALUE =  "un error occured during removing file operation";
    
    public function putFile($file64encode);
    
    public function getFile($fileId);
    
    public function removeFile($fileId);
}

?>