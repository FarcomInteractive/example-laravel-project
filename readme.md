## PHPStorm + Laravel + Twig + Less + xDebug

1.	Возможности PHPStorm, https://www.jetbrains.com/phpstorm/quickstart/
2.	В OpenServer ставим версию php 5.6
3.	Установка Laravel
a.	Создаем в папке OpenServer/domains папку с названием сайта, например laravel
b.	Открываем консоль OpenServer’a
c.	Переходим в нашу папку командой cd domains/laravel
d.	Ставим через Composer, для выполняем в консоли: 
     composer create-project laravel/laravel --prefer-dist
e.	Настраиваем, http://laravel.su/docs/5.0/installation#configuration
4.	Настраиваем xDebug, в php.ini: ( http://open-server.ru/forum/viewtopic.php?f=4&t=1249 )
zend_extension="%sprogdir%/modules/php/%phpdriver%/ext/php_xdebug.dll"
xdebug.auto_trace = 0
xdebug.collect_includes = 1
xdebug.dump.REQUEST = *
xdebug.dump.SESSION = *
xdebug.dump.SERVER = REMOTE_ADDR,REQUEST_METHOD
xdebug.dump_globals = 1
xdebug.dump_once = 1
xdebug.dump_undefined = 1
xdebug.extended_info = 1
xdebug.idekey = "PHPSTORM"
xdebug.max_nesting_level = 256
xdebug.overload_var_dump = 1
xdebug.profiler_enable = 1
xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir="%sprogdir%/userdata/temp/xdebug/"
xdebug.profiler_output_name = "cachegrind.out.%H%R"
xdebug.remote_autostart = 1
xdebug.remote_enable = 1
xdebug.remote_handler = "dbgp"
xdebug.remote_host = "localhost"
xdebug.remote_mode = "req"
xdebug.remote_port = 9000
xdebug.trace_output_dir = "%sprogdir%/userdata/temp/xdebug/"
xdebug.var_display_max_children = 256
xdebug.var_display_max_depth = 16

5.	LESS ( http://lesscss.org/ ), Компиляция LESS в CSS на лету в phpStorm под Windows ( http://predvoditelev.ru/less_to_css_in_phpstorm_win/ )
6.	Ставив Twig, https://github.com/rcrowe/TwigBridge
