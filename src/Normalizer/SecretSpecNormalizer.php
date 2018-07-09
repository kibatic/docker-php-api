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

class SecretSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SecretSpec';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\SecretSpec;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\SecretSpec();
        if (property_exists($data, 'Name') && $data->{'Name'} !== null) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Labels') && $data->{'Labels'} !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (property_exists($data, 'Data') && $data->{'Data'} !== null) {
            $object->setData($data->{'Data'});
        }
        if (property_exists($data, 'Driver') && $data->{'Driver'} !== null) {
            $object->setDriver($this->denormalizer->denormalize($data->{'Driver'}, 'Docker\\API\\Model\\Driver', 'json', $context));
        }
        if (property_exists($data, 'Templating') && $data->{'Templating'} !== null) {
            $object->setTemplating($this->denormalizer->denormalize($data->{'Templating'}, 'Docker\\API\\Model\\Driver', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Labels'} = $values;
        }
        if (null !== $object->getData()) {
            $data->{'Data'} = $object->getData();
        }
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $this->normalizer->normalize($object->getDriver(), 'json', $context);
        }
        if (null !== $object->getTemplating()) {
            $data->{'Templating'} = $this->normalizer->normalize($object->getTemplating(), 'json', $context);
        }

        return $data;
    }
}
