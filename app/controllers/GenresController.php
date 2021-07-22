<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Controllers;

use Linkfire\Assignment\Controllers\HttpExceptions\Http500Exception;
use Linkfire\Assignment\Services\ServiceException;
use Phalcon\Http\Response;
use Phalcon\Http\ResponseInterface;
use Phalcon\Mvc\Controller;

/**
 * Class GenresController
 * @package App\Controllers
 */
class GenresController extends Controller
{

    /**
     * Returns all genres
     *
     * @return ResponseInterface
     * @throws Http500Exception
     */
    public function getGenreListAction()
    {
        try {
            $genreList = $this->genresService->getGenreList();
        } catch (ServiceException $e) {
            throw new Http500Exception('Internal Server Error', $e->getCode(), $e);
        }

        $response = new Response();
        return $response->setJsonContent($genreList);
    }

    /**
     * Returns the genres by ID
     *
     * @param int $id
     *
     * @return Response
     * @throws Http500Exception
     */
    public function getGenreByIdAction(int $id)
    {
        try {
            $genreList = $this->genresService->getGenreById($id);
        } catch (ServiceException $e) {
            throw new Http500Exception('Internal Server Error', $e->getCode(), $e);
        }

        $response = new Response();
        $response->setJsonContent($genreList);

        return $response;
    }
}
