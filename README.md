Info
-------------
Port of http://pecl.php.net/package/amfext/0.9.2 to php 5.3.X. Note some of the Behavior has been changed to emulate ZendAMF



Building
-------------

Under Uni\*/Linux: obtain your php-devel package and unpack the zip in a directory. Then
as any PHP extension perform:

    phpize
    ./configure
    make install
    
Note: there could be some little problems if php includes are not under /usr

In any case remember to add the amf.so/php_amf.dll extension to the php.ini file

Known Builds
--------------

This code has been tested under Centos 5 and Centos 6 on PHP 5.3.3 Centos and latest PHP build since Sept 1st 2013

Authors
-------

Emanuele Ruffaldi <emanuele.ruffaldi@gmail.com>
Dathan Vance Pattishall <dathan.pattishall@funplusgame.com>

---
