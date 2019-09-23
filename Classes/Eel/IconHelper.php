<?php
namespace Sitegeist\Hieroglyph\Eel;

use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;
use Sitegeist\Hieroglyph\Domain\IconSet;
use Sitegeist\Hieroglyph\Domain\IconSetRepository;

class IconHelper implements ProtectedContextAwareInterface
{
    /**
     * @var IconSetRepository
     * @Flow\Inject
     */
    protected $iconSetRepository;

    /**
     * @return IconSet[]
     */
    public function allSets(): array
    {
        return $this->iconSetRepository->findAll();
    }

    /**
     * @return IconSet|null
     */
    public function set(string $name): ?IconSet
    {
        return $this->iconSetRepository->findOneByName($name);
    }

    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}
