# Mojito Shipping Auxiliar Plugin

## Descripción

El **Mojito Shipping Auxiliar Plugin** es un complemento para WordPress diseñado para trabajar junto con el plugin de envío de Mojito Shipping. Permite modificar, habilitar, y gestionar diversas funcionalidades mediante Filtros cuando su sitio web no tiene un Child Theme.

## Requisitos

- **WordPress**: Versión 5.2 o superior.
- **PHP**: Versión 7.4 o superior.
- **WooCommerce**: Versión 8.2.0 o superior.

## Instalación

1. Descargue y extraiga el archivo zip del plugin.
2. Suba la carpeta `mojito-shipping-aux` al directorio `/wp-content/plugins/`.
3. Active el plugin a través del menú `Plugins` en WordPress.

## Uso

Puede agregar aquí los filtros disponibles en el plugin Mojito Shipping, la documentación de los filtros se encuentra en la URL https://mojitowp.com/documentacion/pymexpress/#5.3

## Ejemplos de Uso

### Filtrar y Modificar la Tarifa de Envío

```php
add_filter( 'mojito_shipping_pymexpress_checkout_custom_rate', function( $rate, $filter_params ) {
    // Modifique la tarifa según sea necesario
    $rate['cost'] = $rate['cost'] * 0.9; // Aplicar un 10% de descuento
    return $rate;
}, 10, 2);
