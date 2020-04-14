<?php
// source: /home/uzivatel/projects/NETTE/app/presenters/templates/Pizza/success.latte

use Latte\Runtime as LR;

class Template2f4c7aa6ef extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['key'])) trigger_error('Variable $key overwritten in foreach on line 9');
		if (isset($this->params['items'])) trigger_error('Variable $items overwritten in foreach on line 9');
		if (isset($this->params['keys'])) trigger_error('Variable $keys overwritten in foreach on line 5');
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 5');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<?php
		$iterations = 0;
		foreach ($odeslat as $keys => $item) {
?>
    
<?php
			if (is_array($item)) {
?>

<?php
				$iterations = 0;
				foreach ($item as $key => $items) {
					?>    <?php echo LR\Filters::escapeHtmlText($key) /* line 10 */ ?> => <?php echo LR\Filters::escapeHtmlText($items) /* line 10 */ ?><br>
<?php
					$iterations++;
				}
?>
    
<?php
			}
			else {
?>

        <?php echo LR\Filters::escapeHtmlText($keys) /* line 15 */ ?> => <?php echo LR\Filters::escapeHtmlText($item) /* line 15 */ ?><br>
<?php
			}
?>

    
<?php
			$iterations++;
		}
		
	}

}
