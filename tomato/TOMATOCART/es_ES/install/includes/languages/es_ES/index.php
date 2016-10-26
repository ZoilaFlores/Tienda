# $Id: index.php $
# TomatoCart Open Source Shopping Cart Solutions
# http://www.tomatocart.com
#
# Copyright (c) 2009-2010 Wuxi Elootec Technology Co., Ltd
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License v2 (1991)
# as published by the Free Software Foundation.

page_title_welcome = Bienvenido  a TomatoCart V1.1.3
page_title_pre_installation_check = Chequeo Pre-Instalación
page_title_database_server_setup = Configuración base datos
page_title_web_server = Servidor Web
page_title_online_store_settings = Configuración tienda
page_title_finished = Finalizado

nav_menu_title = Pasos
nav_menu_step_1_text = Contrato de licencia
nav_menu_step_2_text = Verificando pre-instalación
nav_menu_step_3_text = Configuración de la base de datos
nav_menu_step_4_text = Configuración servidor
nav_menu_step_5_text = Configuración tienda
nav_menu_step_6_text = Finalizado

title_language = Idioma:

box_title_license = Licencia
label_agree_to_the_license = Estoy de acuerdo con la licencia
warning_accept_license = Por favor, acepte la licencia antes de instalar TomatoCart!

text_welcome = <p style="background-color: #ff6633; padding: 5px; border: 1px #000 solid;">Por favor tenga en cuenta que esta es una versión alpha en desarrollo y no ha de ser usada para entornos productivos.</p><p>osCommerce is una solución de comercio electrónico bajo desarrollo. Sus características Out-of-the-box permiten a los dueños de tiendas online, a instalar, trabajar y mantener sus tiendas online con un mínimo esfuerzo y sin costes.</p><p>osCommerce combina soluciones Open Source para proveer una plataforma gratuita y abierta que incluye el <i>potente</i> lenguage PHP, el <i>estable</i> Servidor web , y la <i>rápida</i> base de datos MySQL.</p><p>Sin restricciones o requerimientos especiales, osCommerce puede ser instalado en cualquier entorno que soporte Apache, MySQL y PHP, que incluye Linux, Solaris, BSD, y entornos basados en Microsoft Windows.</p>
text_pre_installation_check = Antes de proceder a la instalación asegúrese de que su sistema cumple los requisitos mínimos para su instalación. Si alguna de estas opciones no es compatible, por favor tome las medidas oportunas para corregir los errores. De lo contrario, podría dar lugar a que TomatoCart no funcione correctamente.
text_database_server_setup = El servidor almacena la base de datos el contenido de su tienda en línea tales como información sobre productos, información de clientes y los pedidos que se han realizado. Por favor consulte al administrador de su servidor/hosting si los parámetros del servidor de base de datos no los conoce.
text_web_server = <p>El servidor web se encarga de servir las páginas de la tienda en línea para los visitantes y clientes. Los parámetros de los servidores Web asegurarse de que los enlaces a las páginas que señale la ubicación correcta.</p><p>Ficheros temporales, tales como datos de la sesión y los archivos de caché se almacenan en el directorio de trabajo. Es importante que este directorio se encuentre fuera del directorio raíz del servidor web y este protegido del acceso público.</p>
text_online_store_settings = <p>Definir aquí el nombre de la tienda online, y la información de contacto de los propietarios de la tienda.</p><p>El nombre de usuario y contraseña de administrador se utilizan para acceder a la herramienta de administración de la tienda.</p>
text_finished = Enhorabuena por la instalación y configuración  de TomatoCart como  solución para su tienda en línea!<br />
Esperamos que todo lo que ofrece TomatoCart sea de su agrado y le invitamos a que se una y participe en nuestra comunidad.<br />
- El equipo de TomatoCart


param_database_server = Servidor de la base datos
param_database_server_description = La dirección del servidor de base de datos en la forma de un nombre de host o dirección IP.El 90% de los casos suele ser localhost.
param_database_username = Usuario base datos
param_database_username_description = El nombre de usuario utilizado para conectarse al servidor de base de datos.
param_database_password = Contraseña base datos
param_database_password_description = La contraseña que se utiliza junto con el nombre de usuario para conectarse al servidor de base de datos.
param_database_name = Nombre Base datos
param_database_name_description = El nombre de la base de datos
param_database_type = Tipo base de datos
param_database_type_description = El software del servidor de base de datos que se utiliza.
param_database_prefix = Prefijo base de datos
param_database_prefix_description = El prefijo a usar para las tablas de la base de datos.

param_database_import_sample_data = Importar datos de la muestra
param_database_import_sample_data_description = Inserción de datos de ejemplo en la base de datos, se recomienda para usuarios noveles y primeras instalaciones.

param_web_address = Dirección WWW
param_web_address_description = La dirección web de la tienda en línea.
param_web_root_directory = Directorio raíz del servidor web
param_web_root_directory_description = El directorio donde está instalada la tienda en línea en el servidor.
param_web_work_directory = Directorio de trabajo
param_web_work_directory_description = El directorio de trabajo para los archivos temporales. Este directorio debe estar ubicado fuera del directorio raíz del servidor web público por razones de seguridad. (Servidores de alojamiento compartido no debe usar / tmp /)

param_store_name = Nombre de la tienda
param_store_name_description = El nombre de la tienda en línea que se muestra al público.
param_store_owner_name = Nombre propietario de la tienda
param_store_owner_name_description = El nombre del propietario de la tienda que se muestra al público.
param_store_owner_email_address = Email propietario de la tienda
param_store_owner_email_address_description = El email del propietario de la tienda que se muestra al público.
param_administrator_username = Nombre del Administrador
param_administrator_username_description = El nombre del administrador para el uso del panel de administración.
param_administrator_password = Contraseña administrador
param_confirm_password = Confirmar contraseña
param_administrator_password_description = La contraseña para la cuenta del administrador.


rpc_database_connection_test = Probando conexión con la base de datos
rpc_database_connection_error = <p>Ha habido un problema al conectar con el servidor de base de datos. Se ha producido el siguiente error :</p><p style="width: 150px;"><b>%s</b></p><p>Por favor, compruebe los parámetros de conexión y vuelva a intentarlo.</p>
rpc_database_connected = Conectado correctamente con la base de datos.
rpc_database_importing = La estructura de base de datos está siendo importada. Por favor tenga paciencia durante este procedimiento.
rpc_database_imported = Base de datos importada correctamente.
rpc_database_import_error = <p>ha  habido un problema al importar la base de datos. Se ha producido el siguiente error: </p> <b>%s </b> </p> Por favor, compruebe los parámetros de conexión y vuelva a intentarlo. </p>

rpc_store_setting_username_error = <p>Ha habido un problema en la configuración de la tienda. Se ha producido el siguiente error: </p> <b> El campo nombre no puede estar vacío</b> </p> Por favor introduce el nombre de usuario</p>
rpc_store_setting_password_error = <p> Ha habido un problema en la configuración de la tienda. Se ha producido el siguiente error: </p> <b>El campo contraseña no puede estar vacío!</b> </p> Por favor introduce el nombre de usuario. </p>
rpc_store_setting_confirm_error = <p>Ha habido un problema en la configuración de la tienda. Se ha producido el siguiente error: </p><b> Las contraseñas no son iguales! </b> </p> Por favor introduce el nombre de usuario. </p>
rpc_store_setting_email_error = <p>Ha habido un problema en la configuración de la tienda. Se ha producido el siguiente error:</p><b>El email no es válido! </b></p><p> Por favor introduce el nombre de usuario.</p>

rpc_work_directory_test = Probando el directorio de trabajo..
rpc_work_directory_error_non_existent = Ha habido un problema de acceso al directorio de trabajo. Se ha producido el siguiente error: <br /> <br /> <b> El directorio no existe: <br /> <br />%s </b> <br /> <br /> Por favor, compruebe el directorio y vuelve a intentarlo.
rpc_work_directory_error_not_writeable = Ha habido un problema de acceso al directorio de trabajo. Se ha producido el siguiente error: <br /> <br /> <b> El servidor web no tiene permisos de escritura en el directorio: <br /> <br />%s </b> <br /> <br /> Por favor, compruebe los permisos del directorio y vuelva a intentarlo.
rpc_work_directory_configured = El directorio de trabajo a sido configurado correctamente.

rpc_database_sample_data_importing = Los datos de muestra están siendo importados a la base de datos. Por favor tenga paciencia durante este proceso.
rpc_database_sample_data_imported = Los datos de ejemplo se han  importado correctamente en la base de datos.
rpc_database_sample_data_import_error = <p>Ha habido un problema al importar los datos de muestra en la base de datos. Se ha producido el siguiente error: </p> <b>%s </b> </p> Por favor, compruebe el servidor de base de datos y vuelva a intentarlo. </p>


box_pre_install_title = Pre-install Check
box_server_title = Datos del Servidor
box_server_php_version = Versión PHP
box_server_php_settings = Configuración PHP
box_server_register_globals = register_globals
box_server_magic_quotes = magic_quotes
box_server_file_uploads = file_uploads
box_server_session_auto_start = session.auto_start
box_server_session_use_trans_sid = session.use_trans_sid
box_server_php_extensions = Extensiones PHP
box_server_mysql = MySQL
box_server_gd = GD
box_server_curl = cURL
box_server_openssl = OpenSSL
box_server_on = On
box_server_off = Off
box_file_permissions = Permiso archivos
box_directory_permissions = Permiso directorios

error_configuration_file_not_writeable = <p>Parece que el servidor web no es capaz de escribir los parametros de configuración de la tienda en su fichero de configuración debido a problemas con los permisos de escritura.</p><p>El fichero de configuración está en:</p><p>%s</p>
error_configuration_file_alternate_method = <p>Alternativamente existe la posibilidad de copiar los parámetros de configuración a mano en el fichero. Estos serán provistos al final de la ejecución del script de instalación.</p>
error_agree_to_license = Por favor, acepte la licencia antes de instalar TomatoCart!

text_go_to_shop_after_cfg_file_is_saved = Por favor visite su tienda después de que el archivo de configuración se haya guardado:
