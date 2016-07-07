# searchZipCode
Search places using zip code #Brazil

#### Namespace
```php
   <?php
    use Jsantos\SearchZipCode;
```
#### Method

	* setZipCode(string $zipcode)
	* runZipCode()
	* getAll()
	* getZipCode()
	* getStreet()
	* getComplement()
	* getNeighborhood()
	* getCity()
	* getUf()
	* getUnit()
	* getIbge()
	* getGia()

#### How to use
```php
   <?php
   	use Jsmake\SearchByZipCode;

	$zipCode = new SearchByZipCode();

	$cep = "65.080-341"; //insert Zip code: "65.080-341"

	$response = $zipCode->setZipCode($cep)->runZipCode();
	
	$result = $response->getAll();

	print_r($result);
```
