<?php

Import::php("OpenM-Services.api.OpenM_Service");

/**
 *
 * @package OpenM 
 * @subpackage OpenM\OpenM-Repository\api
 * @author Gaël Saunier
 */
interface OpenM_RepositoryAdmin extends OpenM_Service {
    
    const RETURN_DRIVE_FREE_SPACE_PARAMETER = "DRIVE_FREE_SPACE";
    const RETURN_DRIVE_TOTAL_SPACE_PARAMETER = "DRIVE_TOTAL_SPACE";
    const RETURN_FREE_SPACE_MIN_PARAMETER = "FREE_SPACE_MIN";
    const DEFAULT_FREE_SPACE_MIN = "10%";
    
    public function getDriveInformations();
    
    public function setFreeSpaceMin($freeSpaceMin);
}

?>