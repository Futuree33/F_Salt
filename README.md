# F_Salt (Wrote this cause bored)

- No need to store the salt
- **do not use this for comercial use**

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
