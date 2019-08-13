<?php

namespace Tests\Customer;


use App\App\Repository\CustomerRepository;
use App\Domain\Customer\CustomerService;
use PHPUnit\Framework\TestCase;


class CustomerServiceTest extends TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testFindAllEmpty()
    {
        $costumerRepository = $this->getMockBuilder(CustomerRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $costumerRepository->method('findAll')
            ->will($this->returnValue([]));


        $costumerService = new CustomerService(
            $costumerRepository
        );

        $costumerService->findAll();
    }

    public function testFindAllNotEmpty()
    {
        $costumerRepository = $this->getMockBuilder(CustomerRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $costumers = [
            'name' => 'Guilherme'
        ];

        $costumerRepository->method('findAll')
            ->will(
                $this->returnValue($costumers)
            );

        $costumerService = new CustomerService(
            $costumerRepository
        );

        $result = $costumerService->findAll();

        $this->assertEquals($costumers, $result);
    }
}
