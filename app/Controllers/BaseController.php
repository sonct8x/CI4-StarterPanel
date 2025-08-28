<?php

namespace App\Controllers;

use App\Models\ApplicationModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = ['cookie', 'date', 'security', 'menu', 'useraccess'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    protected $session, $segment, $validation, $encrypter, $ApplicationModel, $data = [];
    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        $this->session          = service('session');
        $this->segment          = service('uri');
        $this->validation       = \Config\Services::validation();
        $this->encrypter        = \Config\Services::encrypter();
        $this->ApplicationModel = new ApplicationModel();

        // Set biến toàn cục cho view
        $PATH_ASSET_CSS     = base_url('assets/v3.0.1/css/');
	    $PATH_ASSET_JS      = base_url('assets/v3.0.1/js/');
        $PATH_ASSET_IMG     = base_url('assets/v3.0.1/img/');
        $PATH_ASSET_PAGE    = base_url('assets/v3.0.1/pages/');
        $PATH_ASSET         = base_url('assets/v3.0.1/');


        $user    = $this->ApplicationModel->getUser(username: session()->get('username'));
        $segment = $this->segment->getSegment(1);
        if ($segment) {
            $subsegment = $this->segment->getSegment(2);
        } else {
            $subsegment = '';
        }
        $this->data = [
            'segment'        => $segment,
            'subsegment'     => $subsegment,
            'user'           => $user,
            'MenuCategory'   => $this->ApplicationModel->getAccessMenuCategory(session()->get('role')),
            'PATH_ASSET_IMG' => $PATH_ASSET_IMG,
            'PATH_ASSET_CSS' => $PATH_ASSET_CSS,
            'PATH_ASSET_JS'  => $PATH_ASSET_JS,
            'PATH_ASSET_PAGE'  => $PATH_ASSET_PAGE,
            'PATH_ASSET'    => $PATH_ASSET,
        ];
    }
}
