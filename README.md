# AKINOS-Files-Storage-Drive
This Web application gives space to store the needed files and can retrieve and download them with ease in a user-friendly manner.


Usage format:
  
  Step1: Run the files
  
  Step2: Create our account
  
  Step3: Upload the files required
  
  Step4: If file size exceed the limt then file will not be uploaded
  
  Step5: Else file will be uploaded 
  
  Step6: Check/View your files
  
  Step7: If needed download the required file
  
  Step8: Save your changes
  
  Step9: If done logout
 
 Note: There must be a uploads folder to duplicate the uploaded file with a unique id in the same folder where php files exists
 
 Server Connection:
  Here Server connection is done with the help of phpmyadmin local server and created database
  
  
 Process:
 
 1. First "home.php" is the start main file 
 2. If you are a new user the registration can be done and details will be uploaded to "try" table in "t1" database with the help of "registration.php"
 3. Else you can login by using the details which will be verified by the "validation.php" file 
 4. 
 5. Then you will be redirected to the "home1.php" file 
 6. In "home1.php" file you can upload the required files to the database where the process is done by the "upload.php" file
 7. You can see the uploaded files by onclicking "click" or "files" which will be directed to the "allfiles.php" file usage
 8. Here all the uploaded can be verified and can also downloaded by using "Download" option with the help of "download.php" file functions usage
