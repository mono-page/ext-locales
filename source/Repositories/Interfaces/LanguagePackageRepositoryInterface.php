<?php declare(strict_types=1);

namespace MonoPage\Languages\Repositories\Interfaces;

use Doctrine\Common\Collections\Criteria;
use Iterator;
use MonoPage\Core\Interfaces\RepositoryInterface;
use MonoPage\Languages\Entities\Interfaces\LanguagePackageInterface;

interface LanguagePackageRepositoryInterface extends RepositoryInterface
{
    public function get(string $id): ?LanguagePackageInterface;

    public function add(LanguagePackageInterface $language): void;

    public function update(LanguagePackageInterface $language): void;

    public function remove(LanguagePackageInterface $language): void;

    /**
     * @param Criteria $criteria
     *
     * @return Iterator|LanguagePackageInterface[]
     */
    public function match(Criteria $criteria): Iterator;
}
