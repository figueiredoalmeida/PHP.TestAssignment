<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Services;

use Linkfire\Assignment\Models\Genres;

/**
 * Business-logic for genres
 *
 * Class GenresService
 */
class GenresService extends AbstractService
{
    /**
     * Returns genres list
     *
     * @return array
     */
    public function getGenreList()
    {
        try {
            $genreList = Genres::find(
                [
                    'conditions' => '',
                    'bind'       => []
                ]
            );

            if (!$genreList) {
                return [];
            }

            return $genreList->toArray();
        } catch (\PDOException $e) {
            throw new ServiceException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * Returns genres by ID
     *
     * @param int $id
     *
     * @return array
     */
    public function getGenreById($id)
    {
        try {
            $genre = Genres::findFirst(
                [
                    'conditions' => 'id = :id:',
                    'bind'       => [
                        'id' => $id
                    ]
                ]
            );

            if (!$genre) {
                throw new ServiceException("Genre not found", self::ERROR_GENRE_NOT_FOUND);
            }

            return $genre->toArray();
        } catch (\PDOException $e) {
            throw new ServiceException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
