# Symfony Micro Kernel Scaffold / Silex alternative

Micro kernel Symfony 8 application based on this guide:
[Building your own Framework with the MicroKernelTrait](https://symfony.com/doc/current/configuration/micro_kernel_trait.html)

Very minimalistic app, similar to deprecated Silex microframework.
Suitable for building REST APIs, or simple websites (supports Twig templates).

How to:
1. Configure a [Symfony Local Web Server](https://symfony.com/doc/current/setup/symfony_server.html), or an alternative like Apache, Nginx, or LiteSpeed
1. Clone the repository into your VirtualHost
2. Run `composer install`
3. Rename `/config/framework.yaml.example` to `/config/framework.yaml`
4. In `/config/framework.yaml`, replace `framework.secret` value with random hash
5. Open the `/hello` route in your web browser, eg.: [http://localhost:8000/hello](http://localhost:8000/hello) 
Change `localhost:8000` to your virtual host address _if you didn't use the Symfony Local Web Server_

Requirements:
- `PHP 8.4+`

Testing:
1. Install dependencies: `composer install`
2. Run unit tests: `composer test`

Cheers,
Petr