<?php 
   
   include'dbcon.php';

   //ADMIN
   $admin="CREATE TABLE admin(admin_id serial primary key,
                              username varchar(25),
                              password varchar(25))";
   $adm=mysqli_query($con,$admin);

   //STUDENT
      $student="CREATE TABLE student(appl_id int,Sname varchar(50),father_name varchar(50),mother_name varchar(50),gender varchar(10),aadhar_no bigint,dob date,B_place varchar(30),B_taluka varchar(20),B_district varchar(20),B_state varchar(20),religion varchar(20),category varchar(10),caste varchar(15),bloodgroup varchar(5),handicap boolean,minority boolean,mobile_no bigint,telephone_no varchar(20),email varchar(30),res_addr text,per_addr text,photo text,sign text,board_university varchar(30),college_school varchar(30),course varchar(30),class varchar(20),seat_no varchar(20),passing_year varchar(10),t_marks int,m_obtained int,percentage float,marksheet text,faculty varchar(30),c_class varchar(10),subject varchar(60))";
      $stud=mysqli_query($con,$student);


      //pervious education details
      $pre_edu=" CREATE TABLE previous_education(pe_id serial primary key,board_university varchar(30),college_school varchar(30),course varchar(30),class varchar(20),seat_no varchar(20),passing_year varchar(10),t_marks int,m_obtained int,percentage float,marksheet text)";
      $pre=mysqli_query($con,$pre_edu);

      //current education
      $curr_edu="CREATE TABLE curr_education(c_id serial primary key,faculty varchar(30),c_class varchar(10),subject varchar(60))";
      $curr=mysqli_query($con,$curr_edu);

       //payment



      //application
      $application="CREATE TABLE application(app_id serial primary key,s_id int references student(S_id) on delete cascade on update cascade,pe_id int references previous_education(pe_id) on delete cascade on update cascade,c_id int references curr_education(c_id) on delete cascade on update cascade";
      $appl=mysqli_query($con,$application);*/


      //admission
      $admission="CREATE TABLE admission(URN int,appl_id int references student(appl_id),fees varchar(5),paid_amount float,remaining_fee float,fee_status varchar(10))";
      $adm=mysqli_query($con,$admission);

       
      //register
      $register="CREATE TABLE register(r_id serial primary key,name varchar(50),email_id varchar(40),mobile_no bigint,username varchar(20),password varchar(20))";
      $reg=mysqli_query($con,$register);


?>
