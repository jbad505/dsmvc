# DSMVC Frame Work

DSMVC is a light weight highly customizable frame work built with PHP. Use any front end framework of your choice.

### Prerequisites

In order to use the framework, a running web-server(Apache) is required. A database(MySql) is also required for back end data management. XAMPP can be used for development purposes. You can find the installation for your OS at the following link. 

```
https://www.apachefriends.org/download.html
```

### Installing

Navigate to your xampp dir.

```
Linux: /opt/xampp/
```

Make a backup of your htdocs dir.

```
Linux: sudo zip -r htdocs_backup.zip htdocs 
```

Change dir to htdocs.

```
Linux: cd htdocs
```

Remove all files in htdocs.

```
Linux: sudo rm -r *
```

Clone the repository.

```
sudo git clone -v https://github.com/jbad505/dsmvc.git
```

Back out one dir.

```
Linux: cd ..
```

Start xampp.

```
Linux: ./xampp start
```
You should see the following output.

```
Starting XAMPP for Linux 7.2.11-0...
XAMPP: Starting Apache...ok.
XAMPP: Starting MySQL...ok.
XAMPP: Starting ProFTPD...ok.
```

Open a web browser and enter the following url.

```
http://localhost/dsmvc/
```

You should now see a default welcome page.

## Deployment

The config.php file needs to be updated with your database and website information.

```
dsmvc/app/config/config.php
```

## Version

```
dsmvc.v1
```

## Authors

* **James Beauford** - *Creator* - [thedevstack](http://www.thedevstack.com/)
