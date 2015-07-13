# webdesktop

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
