<?php
declare(strict_types = 1);

namespace Innmind\ObjectGraph\LocationRewriter;

use Innmind\ObjectGraph\LocationRewriter;
use Innmind\Url\{
    UrlInterface,
    Scheme,
};

/**
 * Replace url scheme to open the files in Sublime Text
 *
 * @see https://gist.github.com/Baptouuuu/7d6211904e97faf18c6c2c024069c7f1
 * @see https://yourmacguy.wordpress.com/2013/07/17/make-your-own-url-handler/
 */
final class SublimeHandler implements LocationRewriter
{
    public function __invoke(UrlInterface $location): UrlInterface
    {
        return $location->withScheme(new Scheme('sublime'));
    }
}
