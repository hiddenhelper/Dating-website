<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-19 08:12:02 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'datesing_mingle'@'localhost' (using password: YES) C:\xampp\htdocs\slay\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2019-09-19 08:12:02 --> Unable to connect to the database
ERROR - 2019-09-19 08:18:53 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user ''@'localhost' to database 'slay' C:\xampp\htdocs\slay\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2019-09-19 08:18:53 --> Unable to connect to the database
ERROR - 2019-09-19 08:18:57 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user ''@'localhost' to database 'slay' C:\xampp\htdocs\slay\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2019-09-19 08:18:57 --> Unable to connect to the database
ERROR - 2019-09-19 08:18:57 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user ''@'localhost' to database 'slay' C:\xampp\htdocs\slay\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2019-09-19 08:18:57 --> Unable to connect to the database
ERROR - 2019-09-19 07:20:00 --> Query error: Table 'slay.tbl_like_unlike' doesn't exist - Invalid query: SELECT 
                       tbl_like_unlike.user_id,
                       user.user_name,
                       user.user_email,
                       user.f_Uid,
                       new_usr.f_Uid as log_user_uid,
                       user.image1
                    FROM tbl_like_unlike
                    INNER JOIN user ON tbl_like_unlike.user_id = user.user_id 
                    INNER JOIN user as new_usr  ON tbl_like_unlike.to_user_id = new_usr.user_id 
                    WHERE
                    EXISTS (SELECT 1
                          FROM tbl_like_unlike
                          WHERE tbl_like_unlike.user_id = new_usr.user_id ) AND
                          tbl_like_unlike.to_user_id = '' AND 
                          tbl_like_unlike.user_id != '' AND 
                          tbl_like_unlike.status != 2 
                    GROUP BY tbl_like_unlike.user_id
ERROR - 2019-09-19 07:20:06 --> Query error: Table 'slay.tbl_like_unlike' doesn't exist - Invalid query: SELECT 
                       tbl_like_unlike.user_id,
                       user.user_name,
                       user.user_email,
                       user.f_Uid,
                       new_usr.f_Uid as log_user_uid,
                       user.image1
                    FROM tbl_like_unlike
                    INNER JOIN user ON tbl_like_unlike.user_id = user.user_id 
                    INNER JOIN user as new_usr  ON tbl_like_unlike.to_user_id = new_usr.user_id 
                    WHERE
                    EXISTS (SELECT 1
                          FROM tbl_like_unlike
                          WHERE tbl_like_unlike.user_id = new_usr.user_id ) AND
                          tbl_like_unlike.to_user_id = '' AND 
                          tbl_like_unlike.user_id != '' AND 
                          tbl_like_unlike.status != 2 
                    GROUP BY tbl_like_unlike.user_id
ERROR - 2019-09-19 07:22:09 --> Query error: Table 'slay.tbl_like_unlike' doesn't exist - Invalid query: SELECT 
                       tbl_like_unlike.user_id,
                       user.user_name,
                       user.user_email,
                       user.f_Uid,
                       new_usr.f_Uid as log_user_uid,
                       user.image1
                    FROM tbl_like_unlike
                    INNER JOIN user ON tbl_like_unlike.user_id = user.user_id 
                    INNER JOIN user as new_usr  ON tbl_like_unlike.to_user_id = new_usr.user_id 
                    WHERE
                    EXISTS (SELECT 1
                          FROM tbl_like_unlike
                          WHERE tbl_like_unlike.user_id = new_usr.user_id ) AND
                          tbl_like_unlike.to_user_id = '' AND 
                          tbl_like_unlike.user_id != '' AND 
                          tbl_like_unlike.status != 2 
                    GROUP BY tbl_like_unlike.user_id
ERROR - 2019-09-19 10:29:11 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:11 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:11 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:11 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:11 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:11 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:11 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:11 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:33 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:33 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:33 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:33 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:33 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:33 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:33 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:33 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:30:44 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:30:44 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:30:44 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:30:44 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:30:44 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:30:44 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:30:44 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:38 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:31:47 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:47 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:47 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:47 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:48 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:33:03 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:04 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:04 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:04 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:04 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:04 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:04 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:04 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:33:11 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:33:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:37:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:37:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:37:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:37:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:37:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:37:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:37:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:37:12 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:38:07 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:07 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:07 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:07 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:07 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:07 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:07 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:34 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:34 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:34 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:34 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:34 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:34 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:34 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:38:34 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:09 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:09 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:39 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:39 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:39:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:40:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:40:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:40:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:40:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:40:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:40:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:40:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:40:26 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:41:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:41:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:41:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:41:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:41:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:41:40 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:41:41 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:41:41 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 10:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 10:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:16:27 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:16:27 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:16:39 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:16:39 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:29:40 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:29:40 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:34:01 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:34:01 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:35:25 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:35:25 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:44:13 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:44:13 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:45:14 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:45:14 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:46:30 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:46:30 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:48:19 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:48:19 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:48:54 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:48:54 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:48:54 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:48:54 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:48:55 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:48:55 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:49:18 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:49:18 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:52:06 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:52:06 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:52:06 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:52:06 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:52:07 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:52:07 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 11:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:54:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:54:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:54:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:54:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:54:54 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:57:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:57:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:57:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:57:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:57:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:57:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:57:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:57:50 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:04 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:04 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:05 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:05 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:05 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:05 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:05 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:05 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:16 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:16 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:16 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:16 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:17 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:17 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:17 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:17 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:49 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 11:58:52 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:52 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:52 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:52 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:52 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:52 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:52 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:52 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:57 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:58 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:58 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:58 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:58 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:58 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:58 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:58:58 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:04 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:04 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:04 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:04 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:04 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:04 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:04 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:04 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:12 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:12 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:12 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:12 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:12 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:12 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:12 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:13 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:25 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:25 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:25 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:25 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:25 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:25 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:25 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:25 --> 404 Page Not Found: Home/js
ERROR - 2019-09-19 11:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:00:09 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:00:09 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:00:09 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:00:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:00:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:00:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:00:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:00:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:01:04 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 12:01:04 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 12:02:47 --> 404 Page Not Found: Assets/js
ERROR - 2019-09-19 12:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:03:44 --> 404 Page Not Found: Assets/js
ERROR - 2019-09-19 12:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:09:48 --> 404 Page Not Found: Assets/js
ERROR - 2019-09-19 12:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:15:09 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:15:09 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:15:09 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:15:09 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:15:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:15:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:15:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:15:10 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:25:04 --> 404 Page Not Found: Assets/js
ERROR - 2019-09-19 12:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:27:59 --> 404 Page Not Found: Assets/js
ERROR - 2019-09-19 12:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:32:41 --> 404 Page Not Found: Assets/js
ERROR - 2019-09-19 12:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:39:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 683
ERROR - 2019-09-19 11:39:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 686
ERROR - 2019-09-19 11:39:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 789
ERROR - 2019-09-19 11:39:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 790
ERROR - 2019-09-19 11:39:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 791
ERROR - 2019-09-19 11:39:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 792
ERROR - 2019-09-19 11:39:20 --> Severity: Notice --> Undefined property: stdClass::$fcm_id C:\xampp\htdocs\slay\application\views\Health\chat-page.php 854
ERROR - 2019-09-19 11:39:27 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 683
ERROR - 2019-09-19 11:39:27 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 686
ERROR - 2019-09-19 11:39:27 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 789
ERROR - 2019-09-19 11:39:27 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 790
ERROR - 2019-09-19 11:39:27 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 791
ERROR - 2019-09-19 11:39:27 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 792
ERROR - 2019-09-19 11:39:27 --> Severity: Notice --> Undefined property: stdClass::$fcm_id C:\xampp\htdocs\slay\application\views\Health\chat-page.php 854
ERROR - 2019-09-19 12:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 11:40:58 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 683
ERROR - 2019-09-19 11:40:58 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 686
ERROR - 2019-09-19 11:40:58 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 789
ERROR - 2019-09-19 11:40:58 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 790
ERROR - 2019-09-19 11:40:58 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 791
ERROR - 2019-09-19 11:40:58 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\slay\application\views\Health\chat-page.php 792
ERROR - 2019-09-19 11:40:58 --> Severity: Notice --> Undefined property: stdClass::$fcm_id C:\xampp\htdocs\slay\application\views\Health\chat-page.php 854
ERROR - 2019-09-19 12:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:41:40 --> 404 Page Not Found: Assets/js
ERROR - 2019-09-19 12:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:43:24 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:43:24 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:43:25 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:43:25 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:43:25 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:45:41 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:45:41 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:45:41 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:45:41 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:45:42 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:45:42 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:45:42 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:45:42 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 12:47:21 --> 404 Page Not Found: Assets/js
ERROR - 2019-09-19 12:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 12:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 13:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:10:50 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:10:50 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:11:36 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:11:36 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:30 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:30 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:31 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:31 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:31 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:31 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:31 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:31 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:31 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:31 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:34 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:34 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:34 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:35 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:35 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:35 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:35 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:35 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:35 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:36 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:36 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:42 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:42 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:48 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:48 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:49 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:49 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:49 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:12:49 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-19 14:45:55 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:45:55 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:46:23 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:46:23 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:46:23 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:46:23 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:46:23 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:46:23 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:46:23 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:46:23 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:46:26 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:46:26 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:50:55 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:50:55 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:50:55 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:50:55 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:50:55 --> 404 Page Not Found: Welcome/js
ERROR - 2019-09-19 14:50:57 --> 404 Page Not Found: Welcome/images
ERROR - 2019-09-19 14:50:57 --> 404 Page Not Found: Welcome/images
