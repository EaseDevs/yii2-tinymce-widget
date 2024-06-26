# TinyMCE Widget for Yii2


[![Latest Version](https://img.shields.io/github/tag/easedevs/yii2-tinymce-widget.svg?style=flat-square&label=release)](https://github.com/easedevs/yii2-tinymce-widget/releases)
[![Software License](https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/easedevs/yii2-tinymce-widget.svg?style=flat-square)](https://packagist.org/packages/easedevs/yii2-tinymce-widget)

Renders a [TinyMCE WYSIWYG text editor plugin](http://www.tinymce.com/) widget.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require easedevs/yii2-tinymce-widget:~2.0
```
or add

```json
"easedevs/yii2-tinymce-widget": "~2.0"
```

to the require section of your application's `composer.json` file.

## Usage


```

use easedevs\tinymce\TinyMce;

<?= $form->field($model, 'text')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    'language' => 'es',
    'clientOptions' => [
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ]
]);?>
```

### About ClientOptions 

Please, remember that if you are required to add javascript to the configuration of the js plugin and is required to be 
plain JS, make use of `JsExpression`. That class was made by Yii for that specific purpose. For example:
 
```php 
// Having the following scenario
<script> 
    function jsFunctionToBeCalled() {
        // ...
    }
</script>

<?= $form->field($model, 'content')->widget(TinyMce::className(), [
    'options' => ['rows' => 16],
    'language' => 'en_GB',
    'clientOptions' => 
        // ...
        // this will render the function name without quotes on the configuration options of the plugin
        'file_picker_callback' => new JsExpression('jsFunctionToBeCalled'),
        // ...
    ]
]); ?>
```

## Testing

``` bash
$ phpunit
```

## Further Information

Please, check the [TinyMCE plugin site](https://www.tiny.cloud/docs/tinymce/6/) documentation for further 
information about its configuration options.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Antonio Ramirez](https://github.com/tonydspaniard)
- [All Contributors](../../contributors)

## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.


> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)  
<i>Web development has never been so fun!</i>  
[www.2amigos.us](http://www.2amigos.us)
