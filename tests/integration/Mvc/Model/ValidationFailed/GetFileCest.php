<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Mvc\Model\ValidationFailed;

use IntegrationTester;

/**
 * Class GetFileCest
 */
class GetFileCest
{
    /**
     * Tests Phalcon\Mvc\Model\ValidationFailed :: getFile()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcModelValidationfailedGetFile(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\ValidationFailed - getFile()');
        $I->skipTest('Need implementation');
    }
}
