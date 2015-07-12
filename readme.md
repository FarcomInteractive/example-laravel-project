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

<img src="https://www.evernote.com/shard/s138/sh/ad853643-dab3-4288-89f9-82512258dae0/53ca9fd45b81b9a97dad6c1763940b47/res/e6389831-3859-40a9-8828-fd2de3e7e808/skitch.png">

<img src="https://www.evernote.com/shard/s138/sh/e65e5c77-b263-4c2a-8ab4-d0638b4f8c1b/8ebadf78d21776dbc4b9de8f4c9f0302/res/a053bab6-76de-4072-84e4-5e7494ce81e1/skitch.jpg">

<img src="https://www.evernote.com/shard/s138/sh/1c5e895e-15b0-4b28-98e1-b149abf9daa7/888fc0bf2a65934d8dc014a8b6d92e69/res/0fc12625-34cb-478c-a055-0d79b8477afa/skitch.jpg">

<img src="https://www.evernote.com/shard/s138/sh/f526f9b6-21cf-492d-b2d4-06b06e3a94b4/59592e6e5c2ed335244d9ae38a3cb702/res/0cdb0d86-d583-4393-a8ec-7c666c8c0148/skitch.png">

<img src="https://www.evernote.com/shard/s138/sh/6a727d6a-8be9-4c70-9676-9b0a5a37ecec/5bd2bf8b34bb0fa48113d8490d21e461/res/43e9fbd9-c256-496e-ae56-3ab1cb5430f1/skitch.jpg">

<img src="https://www.evernote.com/shard/s138/sh/006aa911-6219-41c5-81e4-c599d1b1aadb/c043b48e4be95e5a4b742e7e26c01016/res/a265ac16-3b6c-4459-879b-642397e05f67/skitch.png">

<img src="https://www.evernote.com/shard/s138/sh/51025cf3-3256-4715-b063-f81085dce8d2/2b5aba0e40afc662ecaac58a8679eaf2/res/3b8887af-e9b2-4801-8ea2-202b3c7f55b9/skitch.jpg">
