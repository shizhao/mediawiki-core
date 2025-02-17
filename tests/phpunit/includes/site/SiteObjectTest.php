<?php

/**
 * Tests for the SiteObject class.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @since 1.21
 *
 * @ingroup Site
 * @ingroup Test
 *
 * @group Site
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class SiteObjectTest extends ORMRowTest {

	/**
	 * @see ORMRowTest::getRowClass
	 * @since 1.21
	 * @return string
	 */
	protected function getRowClass() {
		return 'SiteObject';
	}

	/**
	 * @see ORMRowTest::getTableInstance
	 * @since 1.21
	 * @return IORMTable
	 */
	protected function getTableInstance() {
		return SitesTable::singleton();
	}

	/**
	 * @see ORMRowTest::constructorTestProvider
	 * @since 1.21
	 * @return array
	 */
	public function constructorTestProvider() {
		$argLists = array();

		$argLists[] = array( 'global_key' => '42' );

		$argLists[] = array( 'global_key' => '42', 'type' => Site::TYPE_MEDIAWIKI );

		$constructorArgs = array();

		foreach ( $argLists as $argList ) {
			$constructorArgs[] = array( $argList, true );
		}

		return $constructorArgs;
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testGetInterwikiIds( Site $site ) {
		$this->assertInternalType( 'array', $site->getInterwikiIds() );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testGetNavigationIds( Site $site ) {
		$this->assertInternalType( 'array', $site->getNavigationIds() );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testAddNavigationId( Site $site ) {
		$site->addNavigationId( 'foobar' );
		$this->assertTrue( in_array( 'foobar', $site->getNavigationIds(), true ) );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testAddInterwikiId( Site $site ) {
		$site->addInterwikiId( 'foobar' );
		$this->assertTrue( in_array( 'foobar', $site->getInterwikiIds(), true ) );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testGetLanguageCode( Site $site ) {
		$this->assertTypeOrFalse( 'string', $site->getLanguageCode() );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testSetLanguageCode( Site $site ) {
		$site->setLanguageCode( 'en' );
		$this->assertEquals( 'en', $site->getLanguageCode() );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testNormalizePageName( Site $site ) {
		$this->assertInternalType( 'string', $site->normalizePageName( 'Foobar' ) );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testGetGlobalId( Site $site ) {
		$this->assertInternalType( 'string', $site->getGlobalId() );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testSetGlobalId( Site $site ) {
		$site->setGlobalId( 'foobar' );
		$this->assertEquals( 'foobar', $site->getGlobalId() );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testGetType( Site $site ) {
		$this->assertInternalType( 'string', $site->getType() );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testGetPath( Site $site ) {
		$this->assertTypeOrFalse( 'string', $site->getPath( 'page_path' ) );
		$this->assertTypeOrFalse( 'string', $site->getPath( 'file_path' ) );
		$this->assertTypeOrFalse( 'string', $site->getPath( 'foobar' ) );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testGetAllPaths( Site $site ) {
		$this->assertInternalType( 'array', $site->getAllPaths() );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param Site $site
	 */
	public function testSetAndRemovePath( Site $site ) {
		$count = count( $site->getAllPaths() );

		$site->setPath( 'spam', 'http://www.wikidata.org/$1' );
		$site->setPath( 'spam', 'http://www.wikidata.org/foo/$1' );
		$site->setPath( 'foobar', 'http://www.wikidata.org/bar/$1' );

		$this->assertEquals( $count + 2, count( $site->getAllPaths() ) );

		$this->assertInternalType( 'string', $site->getPath( 'foobar' ) );
		$this->assertEquals( 'http://www.wikidata.org/foo/$1', $site->getPath( 'spam' ) );

		$site->removePath( 'spam' );
		$site->removePath( 'foobar' );

		$this->assertEquals( $count, count( $site->getAllPaths() ) );

		$this->assertFalse( $site->getPath( 'foobar' ) );
		$this->assertFalse( $site->getPath( 'spam' ) );
	}

	public function testSetLinkPath() {
		/* @var SiteObject $site */
		$site = $this->getRowInstance( $this->getMockFields(), false );
		$path = "TestPath/$1";

		$site->setLinkPath( $path );
		$this->assertEquals( $path, $site->getLinkPath() );
	}

	public function testGetLinkPathType() {
		/* @var SiteObject $site */
		$site = $this->getRowInstance( $this->getMockFields(), false );

		$path = 'TestPath/$1';
		$site->setLinkPath( $path );
		$this->assertEquals( $path, $site->getPath( $site->getLinkPathType() ) );

		$path = 'AnotherPath/$1';
		$site->setPath( $site->getLinkPathType(), $path );
		$this->assertEquals( $path, $site->getLinkPath() );
	}

	public function testSetPath() {
		/* @var SiteObject $site */
		$site = $this->getRowInstance( $this->getMockFields(), false );

		$path = 'TestPath/$1';
		$site->setPath( 'foo', $path );

		$this->assertEquals( $path, $site->getPath( 'foo' ) );
	}

	public function provideGetPageUrl() {
		//NOTE: the assumption that the URL is built by replacing $1
		//      with the urlencoded version of $page
		//      is true for SiteObject but not guaranteed for subclasses.
		//      Subclasses need to override this provider appropriately.

		return array(
			array( #0
				'http://acme.test/TestPath/$1',
				'Foo',
				'/TestPath/Foo',
			),
			array( #1
				'http://acme.test/TestScript?x=$1&y=bla',
				'Foo',
				'TestScript?x=Foo&y=bla',
			),
			array( #2
				'http://acme.test/TestPath/$1',
				'foo & bar/xyzzy (quux-shmoox?)',
				'/TestPath/foo%20%26%20bar%2Fxyzzy%20%28quux-shmoox%3F%29',
			),
		);
	}

	/**
	 * @dataProvider provideGetPageUrl
	 */
	public function testGetPageUrl( $path, $page, $expected ) {
		/* @var SiteObject $site */
		$site = $this->getRowInstance( $this->getMockFields(), false );

		//NOTE: the assumption that getPageUrl is based on getLinkPath
		//      is true for SiteObject but not guaranteed for subclasses.
		//      Subclasses need to override this test case appropriately.
		$site->setLinkPath( $path );
		$this->assertContains( $path, $site->getPageUrl() );

		$this->assertContains( $expected, $site->getPageUrl( $page ) );
	}

	protected function assertTypeOrFalse( $type, $value ) {
		if ( $value === false ) {
			$this->assertTrue( true );
		}
		else {
			$this->assertInternalType( $type, $value );
		}
	}

}