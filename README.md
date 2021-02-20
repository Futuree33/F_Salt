# F_Salt (Wrote this cause bored)

- dont use this 
- ***dont use this***
## How it works
- adds the second char to the string then multiplys the lenght of the string by pi and adds the second char again 
- salt will change depending on the lenght of the string (this means you can hash with md5 with the shortest things like "hello" and it will be a little more secure)

## Usage 
- hashing info with salt
```php
$algo = new F_Salt();
$hashed_info = hash("sha512", $algo::salt_info("info here"));
unset($algo);
```
- verifiying this info
```php
$algo = new F_Salt();
if($algo::verf_inf("the algo", "the info", "the hash") == true)
{
   // valid 
}
else 
{
   // invalid
}
unset($algo);

```
