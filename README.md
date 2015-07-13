# webdesktop
> This is an internet application to saving and editing users files with advanced options. It's single page application based on ajax, angularJS and PHP as server part of application.
> User has a user bar panel with notepad, his data and management tools. User can to upload files by drag-and-drop method and see the results of uploading.

## Security elements


##### Base64:
###### btoa(); // encode to base64 (function in js)
###### atob(); //decode base64 (function in js)
> The data is encoding to base64 before sending to server or user.


#### MD5:
###### Use MD5 enript method to encripting users passwords


#### Cookies:
###### Creating 3 days cookie for user IP address; 
###### Cookie value is only guid - 128-bit identification (32 characters)
> Cookie name is encoded to base64
