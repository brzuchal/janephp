<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class Test extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Jane\OpenApi3\Tests\Expected\Model\TestPostBody $requestBody 
     */
    public function __construct(\Jane\OpenApi3\Tests\Expected\Model\TestPostBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/test';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Jane\OpenApi3\Tests\Expected\Model\TestPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        return null;
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}