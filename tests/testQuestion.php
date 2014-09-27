<?php
/**
 * MyClass File Doc Comment
 *
 * @category MyClass
 * @package  MyPackage
 * @author   sangeeta <ss@gmail.com> 
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 *
 */
require_once __DIR__ . "/../boot.php";
/**
 * MyClass Class Doc Comment
 *
 * @category Class
 * @package  MyClass
 * @author   sangeeta <ss@gmail.com> 
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 *
 */
class QuestionTest extends PHPUnit_Framework_TestCase
{
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function testModelLoaded()
    {
        $this->assertInstanceOf('\interview\Question', new \interview\Question(1, new \interview\Database));
    }

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    

    public function testInstantiationById()
    {
        $question = new \interview\Question(1, new \interview\Database);

        $this->assertNotEmpty($question->name);
        $this->assertNotEmpty($question->text);
        $this->assertNotEmpty($question->answer);
        $this->assertNotEmpty($question->created);
    }
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    
    public function testStaticGetNameById()
    {
        $this->assertNotEmpty(\interview\Question::getNameById(1, new \interview\Database));
    }
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    
    public function testStaticGetTextById()
    {
        $this->assertNotEmpty(\interview\Question::getTextById(1, new \interview\Database));
    }
     /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    
    public function testStaticGetAnswerById()
    {
        $this->assertNotEmpty(\interview\Question::getAnswerById(1, new \interview\Database));
    }
       /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    

    public function testStaticGetCreatedById()
    {
        $this->assertNotEmpty(\interview\Question::getCreatedById(1, new \interview\Database));
    }
     /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    
    public function testQuestionsAnswered()
    {
        $this->assertNotEmpty(\interview\Question::getAnswerById(1, new \interview\Database));
        $this->assertNotEmpty(\interview\Question::getAnswerById(2, new \interview\Database));
        $this->assertNotEmpty(\interview\Question::getAnswerById(3, new \interview\Database));
    }
       /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    
}
