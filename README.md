## cPanel/WHM API for PHP library

Gianck Luiz 
GoodBits Tech Panamá


## Contents
- [Installation Guide](#installation-guide)
- [Usage](#usage)
- [Functions](#functions)
- [Feedback & Contribution](#feedback-&-contribution)

### Installation Guide

Install the class in your file

require_once("cPanelApi.php");

### Usage

For example, how to call the function and connect to the cpanel account, example shows the account domains.

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->listDataDomains();

```

### Functions

# MYSQL

Create Database MySQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->createDataBaseMySQL("DATABASENAME");

```

Create User Database MySQL 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->createUserMySQL("USERDB", "PASSWORD");

```

Set Privileges DataBase x User

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->setPrivilegesMySQL("DATABASENAME", "USERDB");

```

Delete Database MySQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->deleteDataBaseMySQL("DATABASENAME");

```

Delete User Database MySQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->deleteUserMySQL("USERDB");

```

Set Password User Database MySQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->setPasswordUserMySQL("USERDB", "NEWPASSWORD");

```

Rename User Database MySQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->renameUserMySQL("USERDB", "NEWUSERDB");

```

Check Database MySQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->checkDataBaseMySQL("DATABASENAME");

```

Check Database MySQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->checkDataBaseMySQL("DATABASENAME");

```

DUMP Database MySQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->dumpDataBaseMySQL("DATABASENAME");

```

# POSTGRESQL

Create Database PostgreSQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->createDataBasePostgre("DATABASENAME");

```

Create User PostgreSQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->createUserPostgre("USERDB", "PASSWORD");

```

Set All Privileges Database x User PostgreSQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->allPrivilegesPostgre("USERDB", "DATABASENAME");

```

Delete Database PostgreSQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->deleteDataBasePostgre("DATABASENAME");

```

Delete User PostgreSQL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->deleteUserPostgre("USERDB");

```

# QUOTA

Get Quota Local Cpanel 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->getLocalQuota();

```

Get Quota Info Cpanel 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->getInfoQuota();

```

# SERVER INFO 

Clear Spam Box 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->clearSpamBox();

```

Get Bandwidth Account cPanel 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->getBandwidth();

```

Get Errors Log cPanel 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->getErrors();

```

# SUBDOMAIN 

Create Subdomain 
The subdomain's document root within the home directory.
This value defaults to the user's home directory /public_html/ path

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->createSubdomain("SUBDOMAIN", "PATH");

```

# BACKUPS 

Create Full Backup FTP

This function creates a full backup to the remote server via File Transfer Protocol (FTP). The system creates a file in the backup-MM.DD.YYYY_HH-mm-ss.tar.gz filename format.
FTPDOMAIN A valid hostname or IP address.
The email address to receive a confirmation email when the backup completes.

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->ftpBackupFull("FTPUSER", "FTPPASSWORD", "FTPDOMAIN", "EMAIL");

```
Create Backup Homedir

This function creates a full backup to the user's home directory. The system creates a file in the backup-MM.DD.YYYY_HH-mm-ss_username.tar.gz filename format.

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->createBackup();

```
Restaure Backup Full

The directory to which to restore the file.
This parameter defaults to the user's /home directory.
The full directory path for a cPanel account.
FILEDIR Example: /home/cpuser/backup_cpuser_9-10-2100.tar.gz

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->restaureBackup("FILEDIR");

```

# FTP CPANEL 

Create Account FTP cPanel 
QUOTA - 0 for Unlimited, 500 = 500mb 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->ftpCreate("USERFTP", "PASSWORDFTP", "QUOTA");

```

Update homedir FTP Account
The FTP account's home directory.

This parameter defaults to the user@domain subdirectory in the cPanel account's home directory with the name, where user and domain represent the user and domain parameters.

A relative path from the cPanel account's home directory. example1/

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->ftpHomeDir("USERFTP", "HOMEDIR");

```

Change FTP Quote Account

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->ftpQuota("USERFTP", "1000");

```

Change Password FTP Account

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->ftpSetPassword("USERFTP", "NEWPASSWORD");

```

Delete FTP Account

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->ftpDelete("USERFTP");

```

# EMAIL

Create Email Account cPanel

The email account username or address.
A valid email account username. For example, user to create.
Example: user

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->createEmail("USERMAIL", "PASSWORD", "QUOTA");

```

Delete Email Account cPanel

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->deleteEmail("USERMAIL");

```

Set Password Email Account cPanel

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->setPasswordEmail("USERMAIL", "NEWPASSWORD");

```

List Email Account User

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->listEmail("user");

```

Add Spam Filter Email Account 
SCORE: 8.0

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->addSpamFilter("user@domain.com", "SCORE");

```

Add Forwarder Email Account

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->addForwarder("user", "emailforwarder@domain.com");

```

Suspend Account Email

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->suspendEmail("user@domain.com");

```

Unsuspend Account Email

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->unsuspendEmail("user@domain.com");

```

Verify Password Account Email

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->verifyPasswordEmail("user@domain.com", "PASSWORD");

```

Trace Delivery Email

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->traceDeliveryEmail("email@example.com");

```

Get Quote Account Email cPanel

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->quotaEmail("user@domain.com");

```

Get Spam Filter Email cPanel

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->getSpamSettings("user@domain.com");

```

# DOMAINS

List Domains cPanel User Account 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->listDomains();

```

List Domains Data cPanel User Account 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->listDataDomains();

```

Get Data Domain cPanel User Account 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->listDataDomains("domain.com");

```

# TOKEN CPANEL 

Create New Token
 
TIME: 6 = 6 Hours

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->createToken("NAMETOKEN", "TIME");

```

Revoke Token cPanel

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->revokeToken("NAMETOKEN");

```

# GET USAGES CPANEL ACCOUNT 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->getUsages();

```

# GET RESELLERS CPANEL ACCOUNT 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->getResellers();

```

# SET LOCALE CPANEL 

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->setLocale("en");

```

# SET LOCALE CPANEL 
https://www.iso.org/iso-3166-country-codes.html

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->setLocale("en");

```

# EMPTY TRASH ACCOUNT CPANEL

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->emptyTrash("31");

```

# SSL

Auto SSL cPanel Account

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->autoSSL();

```

Auto SSL cPanel Account Problems

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->autoSSLProblems();

```

Auto SSL cPanel Account Excludes

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->autoSSLExclude("domain.com");

```

Auto SSL cPanel Account Remove Excludes

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->autoSSLRemoveExclude("domain.com");

```

# GET SIMPLE PASSWORD

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->simple_password();

```

# GET SECURE PASSWORD

```php
  <?php
  require_once("cPanelApi.php");
  $api = new cPanelApi("domain.com","user", "password");
  echo $api->secure_password();

```

#### Defining Configuration on constructor
This is the example when you want to define your configuration while creating new object

```php
  <?php
  $api = new cPanelApi("domain.com","CPANEL_USER", "CPANEL_PASSWORD");
```

#### Usage
For example, you would like to get some list accounts from cPanel/WHM


#### Overriding current configuration
Somehow, you want to override your current configuration. To do this, here is the code


#### Get defined configuration
After you define some of your configuration, you can get it again by calling this functions


#### Feedback and contribution

This package is free and open source, feel free to fork and report some issue to this package. :-). Have fun