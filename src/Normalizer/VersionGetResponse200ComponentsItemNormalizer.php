<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class VersionGetResponse200ComponentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\VersionGetResponse200ComponentsItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\VersionGetResponse200ComponentsItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\VersionGetResponse200ComponentsItem();
        if (property_exists($data, 'Name') && $data->{'Name'} !== null) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Version') && $data->{'Version'} !== null) {
            $object->setVersion($data->{'Version'});
        }
        if (property_exists($data, 'Details') && $data->{'Details'} !== null) {
            $object->setDetails($data->{'Details'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getVersion()) {
            $data->{'Version'} = $object->getVersion();
        }
        if (null !== $object->getDetails()) {
            $data->{'Details'} = $object->getDetails();
        }

        return $data;
    }
}
