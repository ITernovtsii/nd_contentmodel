Norse Digital Content Model extension

Installation
-------------------

- include 'extension/nd_contentmodel/config.php' in your ez publish config
- define your models :)

What is it?
-------------------

Adding possibility to define custom models for any eZ content objects.

Usage example
-------------------

You have content class "my_city" with complex calculation of country.

class eZContentModelMyCity extends eZContentObject {

    protected static $callbackAttributes = array(
        'country_name' => 'getCountryName'
    );

    protected function getCountryName()
    {
        $countryName = 'Ukraine';
        // some code here
        return $countryName;
    }
}

In template:

{def $city = fetch('content', 'node', hash('node_id', 150))}
Country is {$city.country_name}

The same in php:

$node->country_name; // country name from object will be returned

$object->country_name;


PS: Let me know if you need the same for tree node