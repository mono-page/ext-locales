<?php declare(strict_types=1);

namespace MonoPage\Languages\Repositories\Interfaces;

use Doctrine\Common\Collections\Criteria;
use Iterator;
use MonoPage\Core\Interfaces\RepositoryInterface;
use MonoPage\Languages\Entities\Interfaces\LanguageInterface;

interface LanguageRepositoryInterface extends RepositoryInterface
{
    public function get(string $id): ?LanguageInterface;

    public function add(LanguageInterface $language): void;

    public function update(LanguageInterface $language): void;

    public function remove(LanguageInterface $language): void;

    /**
     * @param Criteria $criteria
     *
     * @return Iterator|LanguageInterface[]
     */
    public function match(Criteria $criteria): Iterator;
}
