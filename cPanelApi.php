<?php

class cPanelApi {
    
    public function __construct($cpanelUrl, $cpaneluser, $cpanelPwd, $cpanelPort = '2083') {
        $this->cPanelUser = $cpaneluser;
        $this->cPanelPwd = $cpanelPwd;
        $this->cPanelUrl = $cpanelUrl;
        $this->cPanelPort = $cpanelPort;
    }
    
    /////////////// MYSQL CPANEL //////////////////
    
    public function createDataBaseMySQL($database) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Mysql/create_database?name=$database";
    return $this->exe_cpanel($func);
    
    }
    
    public function createUserMySQL($user, $password) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Mysql/create_user?name=$user&password=$password";
    return $this->exe_cpanel($func);
    
    }
    
    public function deleteDataBaseMySQL($database) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Mysql/delete_database?name=$database";
    return $this->exe_cpanel($func);
    
    }
    
    public function deleteUserMySQL($user) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Mysql/delete_user?name=$user";
    return $this->exe_cpanel($func);
    
    }
    
    
    public function setPrivilegesMySQL($user, $database) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Mysql/set_privileges_on_database?user=$user&database=$database&privileges=ALL";
    return $this->exe_cpanel($func);
    
    }
    
    public function setPasswordUserMySQL($user, $password) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Mysql/set_password?user=$user&password=$password";
    return $this->exe_cpanel($func);
    
    }
    
    public function renameUserMySQL($userold, $usernew) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Mysql/rename_user?oldname=$userold&newname=$usernew";
    return $this->exe_cpanel($func);
    
    }
    
    public function renameDataBaseMySQL($dbold, $dbnew) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Mysql/rename_database?oldname=$dbold&newname=$dbnew";
    return $this->exe_cpanel($func);
    
    }
    
    public function checkDataBaseMySQL($database) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Mysql/check_database?name=$database";
    return $this->exe_cpanel($func);
    
    }
    
    public function dumpDataBaseMySQL($database) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Mysql/dump_database_schema?dbname=$database";
    return $this->exe_cpanel($func);
    
    }
    
    
    /////////////// END MYSQL CPANEL //////////////////
    
    
    
    /////////////// POSTGRESQL CPANEL //////////////////
    
    public function createDataBasePostgre($database) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Postgresql/create_database?name=$database";
    return $this->exe_cpanel($func);
    
    }
    
    public function createUserPostgre($user, $password) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Postgresql/create_user?name=$user&password=$password";
    return $this->exe_cpanel($func);
    
    }
    
    public function deleteDataBasePostgre($database) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Postgresql/delete_database?name=$database";
    return $this->exe_cpanel($func);
    
    }
    
    public function deleteUserPostgre($user) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Postgresql/delete_user?name=$user";
    return $this->exe_cpanel($func);
    
    }
    
    public function allPrivilegesPostgre($user, $database) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Postgresql/grant_all_privileges?user=$user&database=$database";
    return $this->exe_cpanel($func);
    
    }
    
    /////////////// END POSTGRESQL CPANEL //////////////////
    
    
    /////////////// QUOTA CPANEL //////////////////
    
    public function getLocalQuota() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Quota/get_local_quota_info";
    return $this->exe_cpanel($func);
    
    }
    
    public function getInfoQuota() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Quota/get_quota_info";
    return $this->exe_cpanel($func);
    
    }
    
    /////////////// END QUOTA CPANEL //////////////////
    
    
    /////////////// GET SERVER INFO //////////////////
    
    public function getServerInfo() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/ServerInformation/get_information";
    return $this->exe_cpanel($func);
    
    }
    
    /////////////// END SERVER INFO //////////////////
    
    public function clearSpamBox() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/SpamAssassin/clear_spam_box";
    return $this->exe_cpanel($func);
    
    }
    
    public function getBandwidth($timezone) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Stats/get_bandwidth?timezone=$timezone";
    return $this->exe_cpanel($func);
    
    }
    
    public function getErrors() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Stats/get_site_errors?domain=$this->cPanelUrl&log=suexec&maxlines=250";
    return $this->exe_cpanel($func);
    
    }
    
    public function createSubdomain($subdomain, $folder = '') {
    
    if($folder == '') {
        $folderdir = '%2Fpublic_html%2F'.$subdomain;
    } else {
        $folderdir = '%2Fpublic_html%2F'.$folder;
    }
    
    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/SubDomain/addsubdomain?domain=$subdomain&rootdomain=$this->cPanelUrl&dir=$folderdir&disallowdot=0";
    return $this->exe_cpanel($func);
    
    }
    
    /////////// BACKUPS ///////////////
    
    public function ftpBackupFull($username, $password, $ftp, $emailnoty, $dirftp = 'public_ftp', $port = '21') {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Backup/fullbackup_to_ftp?variant=active&username=$username&password=$password&host=$ftp&port=$port&directory=%2F$dirftp&email=$emailnoty";
    return $this->exe_cpanel($func);
    
    }
    
    public function createBackup() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Backup/fullbackup_to_homedir";
    return $this->exe_cpanel($func);
    
    }
    
    public function restaureBackup($dir) {
    
    // /home/cpuser/backup_cpuser_9-10-2019.tar.gz

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Backup/restore_files?backup=$dir&verbose=1&timeout-3600";
    return $this->exe_cpanel($func);
    
    }
    
    /////////// END BACKUPS ///////////////
    
    /////////// FTP ///////////////
    
    public function ftpCreate($user, $password, $quota = '1024') {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Ftp/add_ftp?user=$user&pass=$password&quota=$quota";
    return $this->exe_cpanel($func);
    
    }
    
    public function ftpHomeDir($user, $homedir) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Ftp/set_homedir?user=$user&domain=$this->cPanelUrl&homedir=$homedir%2F";
    return $this->exe_cpanel($func);
    
    }
    
    public function ftpQuota($user, $quota) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Ftp/set_quota?user=$user&quota=$quota";
    return $this->exe_cpanel($func);
    
    }
    
    public function ftpSetPassword($user, $password) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Ftp/passwd?user=$user&pass=$password";
    return $this->exe_cpanel($func);
    
    }
    
    public function ftpDelete($user) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Ftp/delete_ftp?user=$user&destroy=1";
    return $this->exe_cpanel($func);
    
    }
    
    /////////// END FTP ///////////////
    
    
    /////////// EMAIL ///////////////
    
    public function createEmail($usermail, $password, $quota = '0') {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/add_pop?email=$usermail&password=$password&quota=$quota&domain=$this->cPanelUrl&send_welcome_email=1";
    return $this->exe_cpanel($func);
    
    }
    
    public function deleteEmail($usermail) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/delete_pop?email=$usermail&domain=$this->cPanelUrl";
    return $this->exe_cpanel($func);
    
    }
    
    public function listEmail($usermail) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/list_pops?regex=$usermail";
    return $this->exe_cpanel($func);
    
    }
    
    
    public function setPasswordEmail($usermail, $password) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/passwd_pop?email=$usermail&password=$password&domain=$this->cPanelUrl";
    return $this->exe_cpanel($func);
    
    }
    
    
    public function addSpamFilter($email, $score = '8.0') {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/add_spam_filter?required_score=$score&account=$email";
    return $this->exe_cpanel($func);
    
    }
    
    public function addForwarder($usermail, $emailfwd) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/add_forwarder?domain=$this->cPanelUrl&email=$usermail%40$this->cPanelUrl&fwdopt=fwd&fwdemail=$emailfwd";
    return $this->exe_cpanel($func);
    
    }
    
    public function suspendEmail($email) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/suspend_login?email=$email";
    return $this->exe_cpanel($func);
    
    }
    
    public function unsuspendEmail($email) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/unsuspend_login?email=$email";
    return $this->exe_cpanel($func);
    
    }
    
    public function verifyPasswordEmail($email, $password) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/verify_password?email=$email&password=$password";
    return $this->exe_cpanel($func);
    
    }
    
    public function traceDeliveryEmail($email) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/trace_delivery?recipient=$email";
    return $this->exe_cpanel($func);
    
    }
    
    public function getSpamSettings($email) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/get_spam_settings?account=$email";
    return $this->exe_cpanel($func);
    
    }
    
    public function quotaEmail($usermail) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Email/get_pop_quota?email=$usermail&domain=$this->cPanelUrl&as_bytes=1";
    return $this->exe_cpanel($func);
    
    }
    
    /////////// END EMAIL ///////////////
    
    /////////// ADDONS ///////////////
    
    
    public function getUsages() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/ResourceUsage/get_usages";
    return $this->exe_cpanel($func);
    
    }
    
    public function getResellers() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Resellers/list_accounts";
    return $this->exe_cpanel($func);
    
    }
    
    public function setLocale($locale = 'en') {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Locale/set_locale?locale=$locale";
    return $this->exe_cpanel($func);
    
    }
    
    public function getThemes() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Themes/get_theme_base";
    return $this->exe_cpanel($func);
    
    }
    
    public function setTheme($theme = 'paper_lantern') {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Themes/update?theme=$theme";
    return $this->exe_cpanel($func);
    
    }
    
    public function emptyTrash($days = '31') {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Fileman/empty_trash?&older_than=$days";
    return $this->exe_cpanel($func);
    
    }
    
    /////////// SSL ///////////////
    
    public function autoSSL() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/SSL/start_autossl_check";
    return $this->exe_cpanel($func);
    
    }

    
    public function autoSSLProblems() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/SSL/get_autossl_problems";
    return $this->exe_cpanel($func);
    
    }
    
    public function autoSSLExclude($domain) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/SSL/add_autossl_excluded_domains?domains=$domain";
    return $this->exe_cpanel($func);
    
    }
    
    public function autoSSLRemoveExclude($domain) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/SSL/remove_autossl_excluded_domains?domains=$domain";
    return $this->exe_cpanel($func);
    
    }
    
    /////////// TOKEN LOGIN ///////////////
    
    public function createToken($nametoken, $time = '6') {
    
    $timetoken = strtotime("+$time hours"); // Default Hours
    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Tokens/create_full_access?name=$nametoken&expires_at=$timetoken";
    return $this->exe_cpanel($func);
    
    }
    
    public function revokeToken($nametoken) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/Tokens/revoke?name=$nametoken";
    return $this->exe_cpanel($func);
    
    }
    
    /////////// WORDPRESS FUNCTION ///////////////
    
    public function wordpressBackup() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/WordPressBackup/start?site=$this->cPanelUrl";
    return $this->exe_cpanel($func);
    
    }
    
    public function wordpressSetPassword($wpid, $password) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/WordPressInstanceManager/change_admin_password?id=$wpid&password=$password";
    return $this->exe_cpanel($func);
    
    }
    
    public function wordpressRestaure($backupfile) {
        
    //PATCH DO BACK /home/user/public_html/backup.gz
    
    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/WordPressRestore/start?site=$this->cPanelUrl&backup_path=$backupfile";
    return $this->exe_cpanel($func);
    
    }
    
    /////////// DOMAINS ///////////////
    
    public function listDomains() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/DomainInfo/list_domains";
    return $this->exe_cpanel($func);
    
    }
    
    public function listDataDomains() {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/DomainInfo/domains_data?format=hash&return_https_redirect_status=1";
    return $this->exe_cpanel($func);
    
    }
    
    public function getDataDomain($domain) {

    $func = "https://$this->cPanelUrl:$this->cPanelPort/execute/DomainInfo/single_domain_data?domain=$domain&return_https_redirect_status=1";
    return $this->exe_cpanel($func);
    
    }
    
    
   
    /////////// PASSWORDS ///////////////
    
    public function secure_password($length = 20){
      $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
                '0123456789-=~!@#$%^&*()_+./<>?;:[]{}|';
    
      $str = '';
      $max = strlen($chars) - 1;
    
      for ($i=0; $i < $length; $i++)
        $str .= $chars[random_int(0, $max)];
    
      return $str;
    }
    
    
    public function simple_password($length = 20) {
        
        $password_string = '!@#$%*&abcdefghijklmnpqrstuwxyzABCDEFGHJKLMNPQRSTUWXYZ23456789';
        $password = substr(str_shuffle($password_string), 0, 12);
        return $password;
    }
    
    
    // END FUNCTIONS 
    
    
    
    private function exe_cpanel($func = '') {
        $query = $func;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($curl, CURLOPT_HEADER,0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        $header[0] = "Authorization: Basic " . base64_encode($this->cPanelUser.":".$this->cPanelPwd) . "\n\r";
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_URL, $query);
        $result = curl_exec($curl);
        if ($result == false) {
            error_log("curl_exec threw error \"" . curl_error($curl) . "\" for $query");   
        }
        curl_close($curl);
        return $result;
    }

}

?>