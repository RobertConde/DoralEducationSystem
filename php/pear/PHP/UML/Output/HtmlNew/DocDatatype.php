<?php
/**
 * PHP_UML
 *
 * PHP version 5
 *
 * @category PHP
 * @package  PHP_UML
 * @author   Baptiste Autin <ohlesbeauxjours@yahoo.fr> 
 * @license  http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version  SVN: $Revision: 169 $
 * @link     http://pear.php.net/package/PHP_UML
 * @since    $Date: 2011-09-12 01:28:43 +0200 (lun., 12 sept. 2011) $
 */

/**
 * Implementation of the datatype renderer
 * 
 * @category   PHP
 * @package    PHP_UML
 * @subpackage Output
 * @subpackage HtmlNew
 * @author     Baptiste Autin <ohlesbeauxjours@yahoo.fr> 
 * @license    http://www.gnu.org/licenses/lgpl.html LGPL License 3
 */
class PHP_UML_Output_HtmlNew_DocDatatype extends PHP_UML_Output_HtmlNew_DocClassifier
{
    
    protected function getTypeName()
    {
        return 'datatype';
    }
    
    protected function getStyleName()
    {
        return 'datatype';
    }
   
    protected function getPrefix()
    {
        return self::DATATYPE_PREFIX;
    }

    protected function getCurrentElement($i)
    {
        return $this->getContextPackage()->datatypes[$i];
    }

    protected function getNextElement($i)
    {
        return $i+1<count($this->getContextPackage()->datatypes) ? $this->getContextPackage()->datatypes[$i+1] : null;
    }

    protected function getPreviousElement($i)
    {
        return $i>0 ? $this->getContextPackage()->datatypes[$i-1] : null;
    }
}
?>
