<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3febe578188f445290cbb66d424336c3
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sofort\\SofortLib\\' => 
            array (
                0 => __DIR__ . '/..' . '/sofort/sofortlib-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Sofort\\SofortLib\\AbstractDataHandler' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/AbstractDataHandler.php',
        'Sofort\\SofortLib\\AbstractHttp' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/AbstractHttp.php',
        'Sofort\\SofortLib\\AbstractLoggerHandler' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/AbstractLoggerHandler.php',
        'Sofort\\SofortLib\\AbstractWrapper' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/AbstractWrapper.php',
        'Sofort\\SofortLib\\Billcode' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Billcode.php',
        'Sofort\\SofortLib\\BillcodeDetails' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/BillcodeDetails.php',
        'Sofort\\SofortLib\\Factory' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Factory.php',
        'Sofort\\SofortLib\\FileLogger' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/FileLogger.php',
        'Sofort\\SofortLib\\HttpCurl' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/HttpCurl.php',
        'Sofort\\SofortLib\\HttpSocket' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/HttpSocket.php',
        'Sofort\\SofortLib\\Ideal' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Ideal.php',
        'Sofort\\SofortLib\\IdealBanks' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/IdealBanks.php',
        'Sofort\\SofortLib\\IdealNotification' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/IdealNotification.php',
        'Sofort\\SofortLib\\Multipay' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Multipay.php',
        'Sofort\\SofortLib\\Notification' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Notification.php',
        'Sofort\\SofortLib\\Paycode' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Paycode.php',
        'Sofort\\SofortLib\\PaycodeAbstract' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/PaycodeAbstract.php',
        'Sofort\\SofortLib\\PaycodeDetails' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/PaycodeDetails.php',
        'Sofort\\SofortLib\\PaycodeDetailsAbstract' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/PaycodeDetailsAbstract.php',
        'Sofort\\SofortLib\\Refund' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Refund.php',
        'Sofort\\SofortLib\\Sofortueberweisung' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Sofortueberweisung.php',
        'Sofort\\SofortLib\\TransactionData' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/TransactionData.php',
        'Sofort\\SofortLib\\XmlDataHandler' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/XmlDataHandler.php',
        'Sofort\\SofortLib\\Xml\\ArrayToXml' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Xml/ArrayToXml.php',
        'Sofort\\SofortLib\\Xml\\ArrayToXmlException' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Xml/ArrayToXmlException.php',
        'Sofort\\SofortLib\\Xml\\Element\\Element' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Xml/Element/Element.php',
        'Sofort\\SofortLib\\Xml\\Element\\Tag' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Xml/Element/Tag.php',
        'Sofort\\SofortLib\\Xml\\Element\\Text' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Xml/Element/Text.php',
        'Sofort\\SofortLib\\Xml\\XmlToArray' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Xml/XmlToArray.php',
        'Sofort\\SofortLib\\Xml\\XmlToArrayException' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Xml/XmlToArrayException.php',
        'Sofort\\SofortLib\\Xml\\XmlToArrayNode' => __DIR__ . '/..' . '/Sofort/sofortlib-php/src/Sofort/SofortLib/Xml/XmlToArrayNode.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3febe578188f445290cbb66d424336c3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3febe578188f445290cbb66d424336c3::$classMap;

        }, null, ClassLoader::class);
    }
}