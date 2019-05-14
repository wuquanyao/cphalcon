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

namespace Phalcon\Test\Integration\Mvc\View;

use IntegrationTester;

/**
 * Class GetPartialCest
 */
class GetPartialCest
{
    /**
     * Tests Phalcon\Mvc\View :: getPartial()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcViewGetPartial(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\View - getPartial()');
        $I->skipTest('Need implementation');
    }
}
