# STAFF APPRAISAL AND PROMOTION SYSTEM USING LARAVEL 9 AND SKY-DASH BOOTSTRAP THEME
## Staff-appraisal-and-promotion-system-in-Laravel-9

# important keywords to note for this piece
performan review
pefm eval
emplee eval
emplee rating
merits eval
personal rating

# Performance appraisal can be seen as the systematic description of individual job-relevant strengths and weaknesses for the purposes of making a decision about the individual. 

# In another term, performance appraisal is a process of evaluating the behaviour of the employees in the workplace, or can also be referred as a process of giving feedback on employee’s performance. It involves a very complicated process and various factors can influence the process. Therefore, the process of evaluating employee’s behaviour should be looked at as a reciprocal process or using a matrix perspective and not as a straightforward process (Rusli Ahmad, 2017). There are a number of different appraisal approaches/methods commonly used in organisations with methods used has their advantages as well as disadvantages and there is no right and wrong methods or approaches. Consistency and focus on the usage of the approaches or methodology are crucial to ensure they are successful.

# Criterials for this evaluation system:
--> attendance
-----> timing
-----> d/MTD
--> job completion

# promotion
--> Salary increments
--> level increments
--> Level


# Guides for laravel customisations

## how to make middleware
-- run php artisan make:middleware in CLI\
-- add middle ware to kernel list to make it run durring any http request

# important
if apprasial level reach a certain levfel the admin can then initiate the command from his dashboard
-- upon login and 

# create a model and also a migrattion table to be inserted into database
-- php artisan make:Model Attendance -m

``php
C:\xampp_8_1_6\htdocs\staff_appraisal_promotion_system>php artisan tinker
Psy Shell v0.11.5 (PHP 8.1.6 — cli) by Justin Hileman
>>> $attends = new App\Models\Attendance();
=> App\Models\Attendance {#3576}

>>> $attends->staff_username = 'admin';
=> "admin"

>>> $attends->remark = 'on time';
=> "on time"

>>> $attends->reward = '2.5';
=> "2.5"

>>> $attends->save();
=> true

>>>                                                                                                                     
``

# 
# create controller with rich and resource features
-- php artisan make:controller AttendanceController --resource
