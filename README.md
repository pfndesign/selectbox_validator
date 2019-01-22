# selectbox_validator
simple select box validator using select box html

# what is this ?

when you are using a long select box in your website for example country selectbox or city selectbox or any other static selectbox user can simple edit the value of a option and send it to the backend and create alot of problem . users can attack your website using this method.
to fix this problem you need to check if user sended the value from the selectbox itself or not
if you are creating the selectbox from database then you can check the values there 
but if you are not, you need to convert all of the values from selectbox to array and then check them with user input
this class does this both for you , you just need to simply copy the selectbox html
# how to use?

## setup :

```php
$check = new selectbox_validator();
```

## check :

check user input with values in select box using select box html

```php
$check->checkinput($selectboxhtml,$userinput);
```
- selectboxhtml : select box html for example :
  ```html
  <select>
    <option value="IR">Iran</option>
  </select>
  ```
- userinput : user input to check

### return : true if found , false if not found

## convert :
simple convert select box values to array

```php
$check->toarray($selectboxhtml);
```
- selectboxhtml : select box html for example :
  ```html
  <select>
    <option value="IR">Iran</option>
  </select>
  ```

### return : selext box values in array form that you can copy into php
