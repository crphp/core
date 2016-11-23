<?php

/**
 * Assinatura dos métodos básicos para consultar dados referentes a Disco Rígido
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Interfaces\Sistema;

use Crphp\Core\Sistema\Conector;

interface DiscoRigidoInterface
{
    /**
     * Consulta todas as partições de disco reconhecidas pelo host remoto
     * 
     * @param   \Crphp\Wmi\Conectores\Conector $conexao
     * @param   string|null                    $particao
     * @return  null
     */
    function __construct(Conector $conexao, $particao = null);

    /**
     * Retorna a capacidade de cada partição
     * 
     * @return array
     */
    public function capacidade();

    /**
     * Retorna o espaço livre em cada partição e o percentual que isso representa
     * 
     * @retun array
     */
    public function espacoLivre();

    /**
     * Retorna o espaço utilizado e o percentual que isso representa
     * 
     * @return  array
     */
    public function espacoUtilizado();

    /**
     * Retorna uma visão geral referente as partições consultadas
     * 
     * @return array
     */
    public function detalhes();
}