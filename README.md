# li₃ fullstack distribution

##Installation Process

1. Download the Zip file/github url

2. Place the folder in windows -->htdocs or in linux -->html folder.

3. Download the latest php8 supporting library form below path.

   https://github.com/UnionOfRAD/lithium/tree/v2.0.0

4. Place the lithium library files in root folder inside 'libaries' folder.

5. Please install PHP8.1 version.

6. Install the flash library that is available in the project root folder as flash.zip, Unzip that file and place the flash libary folder inside libraries folder.

7. Setup the database, the database sql export file is kept in Database folder, create a new database with the name as "database".

8. Run the project in localhost.



##Issues/Observations

1. We have issue while reading the flash library messages. We have writen a sample Flash::write() and Flash::read() code to showcase the issue.

2. In bootstrap Session file we have kept adapater setting as Model which is the file in app\extensions\adapter\session\Model.php

3. We are using the session_set_save_handler function for all the session operations in Model.php file (This is a li3 model adapter file).

4. While trying to read the flash messages, We are getting an issue near _read function (Line no 258). As per the php8 changes the return type of the read method is string, so we have later changed return type with typecasting as string.
You can also please remove the typecasting (string) from the code and check the actual error.

5. We are expecting the issue is somewhere from internal library files.


