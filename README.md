# OpenNebula API Bindings for PHP

It parses XML responses to array. You can traverse over it by using dot notation.
We generated public methods with docs from api.rst file.

## Examples

**Connect to API, create client instance**
```
$client = new \One\One('http://{IP}:2633/RPC2', 'username:password');
```

**Call some method and get response** - `\One\Resource` class instance
```
try {
    $response = $client->vmpoolInfoextended(-1, -1, -1, -1, '');
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
    exit(1);
}
```

**Work with response**  
`\One\Resource` class instance is wrapper over [adbario/php-dot-notation](https://packagist.org/packages/adbario/php-dot-notation)
```
$vms = $response->get('VM');

echo "Total number of VMs is " , $vms->count() , "\n";

foreach($vms->all() as $vm) {
    if (!$vm->isEmpty('USER_TEMPLATE.LABELS')) {
        echo "VM ID ", $vm->get('ID'), " has label(s): ", $vm->get('USER_TEMPLATE.LABELS'), "\n";
    } else {
        echo "VM ID ", $vm->get('ID'), " doesn't have any labels.\n";
    }
}
```

**Index result array by specific subkey**
```
$vms = $response->getIndexedBy('ID', 'VM');
// get VM with ID 2403
$vm = $vms->get(2403);
```

## Development

To contribute bug patches or new features, you can use the github Pull Request model. It is assumed that code and documentation are contributed under the Apache License 2.0.

More info:

* Issues Tracking: [Github issues](https://github.com/FELDSAM-INC/one-php/issues)

## Authors

* Leader: Kristian Feldsam (feldsam@feldhost.net)

## Support

[FeldHost™ as OpenNebula Contributor](https://www.feldhost.net/products/opennebula) offers design, implementation, operation and management of a cloud solution based on OpenNebula.
