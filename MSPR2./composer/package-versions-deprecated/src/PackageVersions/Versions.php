<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.1@2afde5a9844126bc311cd5f548b5475e75f800d3',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.3@015fdd490074d4daa891e2d1df998dc35ba54924',
  'doctrine/doctrine-migrations-bundle' => '3.0.2@b8de89fe811e62f1dea8cf9aafda0ea45ca6f1f3',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.0@260991be753a38aa25b6f2d13dbb7f113f8dbf8f',
  'doctrine/orm' => '2.8.2@ebae57eb9637acd8252b398df3121b120688ed5c',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'guzzlehttp/guzzle' => '7.2.0@0aa74dfb41ae110835923ef10a9d803a22d50e79',
  'guzzlehttp/promises' => '1.4.0@60d379c243457e073cff02bc323a2a86cb355631',
  'guzzlehttp/psr7' => '1.7.0@53330f47520498c0ae1f61f7e2c90f55690c06a3',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'liip/test-fixtures-bundle' => '1.11.1@a923ff35cb1a1ca3a2c87d2a278b3085d53ef37d',
  'monolog/monolog' => '1.26.0@2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.0.4@e4782611070e50613683d2b9a57730e9a3ba5451',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.12.2@245710e971a030f42e08f4912863805570f23d39',
  'phpunit/php-code-coverage' => '9.2.5@f3e026641cc91909d421802dd3ac7827ebfd97e1',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.2@f661659747f2f87f9e72095bb207bceb0f151cb4',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.2@a90ccbddffa067b51f574dea6eb25d5680839455',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.1@81cd61ab7bbf2de744aba0ea61fae32f721df3d2',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'sensio/framework-extra-bundle' => 'v6.1.0@b3596907c3d35bee5a9a1096baaeb7d465a04f30',
  'squizlabs/php_codesniffer' => '3.5.8@9d583721a7157ee997f235f327de038e7ea6dac4',
  'symfony/asset' => 'v4.4.19@f2204a526c34945b1614cde033692983b6102eb8',
  'symfony/browser-kit' => 'v4.4.19@f6f060bdc473c3f3b1f00e2ebdeb3d02eda77f82',
  'symfony/cache' => 'v4.4.19@3c18a6d8e4fb15b9e6ed4e6eb1c93f2ad0fd4d55',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v4.4.19@2c4c7827a7e143f5cf375666641b0f448eab8802',
  'symfony/console' => 'v4.4.19@24026c44fc37099fa145707fecd43672831b837a',
  'symfony/css-selector' => 'v4.4.19@f907d3e53ecb2a5fad8609eb2f30525287a734c8',
  'symfony/debug' => 'v4.4.19@af4987aa4a5630e9615be9d9c3ed1b0f24ca449c',
  'symfony/dependency-injection' => 'v4.4.19@2468b95d869c872c6fb1b93b395a7fcd5331f2b9',
  'symfony/doctrine-bridge' => 'v4.4.19@a908956f818918488a8705aca534cd4b7e070774',
  'symfony/dom-crawler' => 'v4.4.19@21032c566558255e551d23f4a516434c9e3a9a78',
  'symfony/dotenv' => 'v4.4.19@4952e5ce9e6df3d737b9e9c337bddf781180a213',
  'symfony/error-handler' => 'v4.4.19@d603654eaeb713503bba3e308b9e748e5a6d3f2e',
  'symfony/event-dispatcher' => 'v4.4.19@c352647244bd376bf7d31efbd5401f13f50dad0c',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.19@066402a1894fcaef22cbff1591c8a0bdf7f66e9b',
  'symfony/filesystem' => 'v4.4.19@83a6feed14846d2d9f3916adbaf838819e4e3380',
  'symfony/finder' => 'v4.4.19@25d79cfccfc12e84e7a63a248c3f0720fdd92db6',
  'symfony/flex' => 'v1.12.2@e472606b4b3173564f0edbca8f5d32b52fc4f2c9',
  'symfony/form' => 'v4.4.19@bab1af95e9e6cac06c7bfe68731b526809fa38d3',
  'symfony/framework-bundle' => 'v4.4.19@790f1db60deb1577eaf86f2025215b48c53f8e94',
  'symfony/http-client' => 'v4.4.19@d8df50fe9229576b254c6822eb5cfff36c02c967',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v4.4.19@8888741b633f6c3d1e572b7735ad2cae3e03f9c5',
  'symfony/http-kernel' => 'v4.4.19@07ea794a327d7c8c5d76e3058fde9fec6a711cb4',
  'symfony/inflector' => 'v4.4.19@a8691d012fb449ba49363a3b3e3e743f354f7d56',
  'symfony/intl' => 'v4.4.19@8a15571146066c39536fd7c3734aa36281d0e788',
  'symfony/mailer' => 'v4.4.19@38b6dcb4bb265fa4f003b0f42dd42fb91cbd877b',
  'symfony/mime' => 'v4.4.19@7f50c27c7417115ca620962b853a7f4db0479e7c',
  'symfony/monolog-bridge' => 'v4.4.19@47343492b1841db765de8d55b4b5ccaa1c96edd3',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/options-resolver' => 'v4.4.19@cd8c6a2778d5f8b5e8fc4b7abdf126790b5d5095',
  'symfony/phpunit-bridge' => 'v5.2.3@587f2b6bbcda8c473b91c18165958ffbb8af3c4c',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php72' => 'v1.22.1@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v4.4.19@7e950b6366d4da90292c2e7fa820b3c1842b965a',
  'symfony/property-access' => 'v4.4.19@94a1d9837396c71a0d8c31686c16693a15651622',
  'symfony/property-info' => 'v4.4.19@3314c9f854b8693b12c81114556c1fb51b6d2bf7',
  'symfony/proxy-manager-bridge' => 'v4.4.19@811a39770b21f05bea9a737568074be4f02e7733',
  'symfony/routing' => 'v4.4.19@87529f6e305c7acb162840d1ea57922038072425',
  'symfony/security-bundle' => 'v4.4.19@b2cd6ea94f82b0d018dd26275f18392881cab6d1',
  'symfony/security-core' => 'v4.4.19@02da7f55df0a144972b0e012810d6515b5adf3fb',
  'symfony/security-csrf' => 'v4.4.19@6864087a9c20eb4bb4063fc2f36954cec0ce28a6',
  'symfony/security-guard' => 'v4.4.19@20f522ada1eefb7c2f90cb83dcc76abb160c782f',
  'symfony/security-http' => 'v4.4.19@c275805b0205403be4124b9cdef6eea72b09a28d',
  'symfony/serializer' => 'v4.4.19@6b383bc45777d14857b634e9f8fa2b8a2e69b66d',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v4.4.19@c5572f6494fc20668a73b77684d8dc77e534d8cf',
  'symfony/translation' => 'v4.4.19@e1d0c67167a553556d9f974b5fa79c2448df317a',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v4.4.19@85a27fe641886e07edcef52105df9b59225d4ceb',
  'symfony/twig-bundle' => 'v4.4.19@7cee73b45e3bd963a0ab4184f1041dcdc85b6e86',
  'symfony/validator' => 'v4.4.19@039479123c8d824f23efba9bb413b85dc3f42e43',
  'symfony/var-dumper' => 'v4.4.19@a1eab2f69906dc83c5ddba4632180260d0ab4f7f',
  'symfony/var-exporter' => 'v4.4.19@3a3ea598bba6901d20b58c2579f68700089244ed',
  'symfony/web-link' => 'v4.4.19@e063a969693e2c0804df709f661bd50e10f13665',
  'symfony/yaml' => 'v4.4.19@17ed9f14c1aa05b1a5cf2e2c5ef2d0be28058ef9',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'twig/extra-bundle' => 'v3.3.0@e2d27a86c3f47859eb07808fa7c8679d30fcbdde',
  'twig/twig' => 'v3.3.0@1f3b7e2c06cc05d42936a8ad508ff1db7975cdc5',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'escapestudios/symfony2-coding-standard' => 'dev-master@1524e573f5061555af3c363f0948c444d8522499',
  'symfony/debug-bundle' => 'v4.4.19@1e136a4c6d8c2364b77e31c5bf124660cff6d084',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/maker-bundle' => 'v1.29.1@313b5669a5370bf36cd34fa8f5b5bbbfa5fb8aa8',
  'symfony/web-profiler-bundle' => 'v4.4.19@6cde98609e1dd9afa9840b9c222a59ee40cef2db',
  'paragonie/random_compat' => '2.*@1a4f95eceb6f75388f9c17e142079e9a5f193c25',
  'symfony/polyfill-ctype' => '*@1a4f95eceb6f75388f9c17e142079e9a5f193c25',
  'symfony/polyfill-iconv' => '*@1a4f95eceb6f75388f9c17e142079e9a5f193c25',
  'symfony/polyfill-php71' => '*@1a4f95eceb6f75388f9c17e142079e9a5f193c25',
  'symfony/polyfill-php70' => '*@1a4f95eceb6f75388f9c17e142079e9a5f193c25',
  'symfony/polyfill-php56' => '*@1a4f95eceb6f75388f9c17e142079e9a5f193c25',
  '__root__' => 'dev-main@1a4f95eceb6f75388f9c17e142079e9a5f193c25',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}