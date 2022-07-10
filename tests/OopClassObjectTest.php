<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class OOpClassObjectTest extends TestCase
{
    /**
     * Create setup before class.
     * 
     * @return void
     */
    public static function setUpBeforeClass(): void
    {
        include_once __DIR__ . '/../src/assignments/oop-class-object/classes.php';
    }

    private $_animal_object;
    private $_reflector_animal_object;

    /**
     * Create setup before test.
     * 
     * @return void
     */
    protected function setUp(): void
    {
        $this->assertTrue(class_exists(Animal::class), 'Class `Animal` is missing.');

        $this->_animal_object = new Animal();
        $this->_reflector_animal_object = new ReflectionClass(Animal::class);
    }

    /**
     * Test properties / Access Modifiers.
     * 
     * @return void
     */
    public function testProperties()
    {
        $this->assertTrue(property_exists(Animal::class, 'species'), 'Class `Animal` is missing property `species`.');
        $this->assertTrue($this->_reflector_animal_object->getProperty('species')->isPublic(), 'Class `Animal` property `species` is not public.');

        $this->assertTrue(property_exists(Animal::class, 'kudos'), 'Class `Animal` is missing property `kudos`.');
        $this->assertTrue($this->_reflector_animal_object->getProperty('kudos')->isPublic(), 'Class `Animal` property `kudos` is not public.');

        $this->assertTrue(property_exists(Animal::class, 'calling'), 'Class `Animal` is missing property `calling`.');
        $this->assertTrue($this->_reflector_animal_object->getProperty('calling')->isProtected(), 'Class `Animal` property `calling` is not protected.');
    }

    /**
     * Check methods / Access Modifiers.
     * 
     * @return void
     */
    public function testMethods(): void
    {
        $this->assertTrue(method_exists(Animal::class, 'set_species'), 'Class `Animal` is missing method `set_species`.');
        $this->assertTrue($this->_reflector_animal_object->getMethod('set_species')->isPublic(), 'Class `Animal` method `set_species` is not public.');
    }

    /**
     * Test set_species method.
     * 
     * @param $value         mixed 
     * @param $is_acceptable bool 
     * 
     * @dataProvider stringDataProvider 
     * 
     * @return void
     */
    public function testSetSpeciesMethod($value, bool $is_acceptable): void
    {
        $this->_animal_object->set_species($value);

        if ($is_acceptable) {
            $this->assertEquals($value, $this->_animal_object->species, 'Class `Animal` method `set_species` should set object property `species` value.');
            $this->assertIsString($this->_animal_object->species, 'Class `Animal` property `species` value should be string.');
        } else {
            $this->assertNull($this->_animal_object->species, 'Class `Animal` method `set_species` should only accept string as object property `species` value.');
        }
    }

    /**
     * Create tear down after test.
     * 
     * @return void
     */
    public function tearDown(): void
    {
    }

    /**
     * Test data provider.
     * 
     * @return void
     */
    public function stringDataProvider()
    {
        return [
            [null, false],
            [false, false],
            [true, false],
            [0, false],
            ['string', true]
        ];
    }

    /**
     * Create tear down after class.
     * 
     * @return void
     */
    public static function tearDownAfterClass(): void
    {
    }
}
