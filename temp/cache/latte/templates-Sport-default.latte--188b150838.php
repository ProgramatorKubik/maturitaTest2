<?php
// source: C:\wamp64\www\projects\NETTE\app\presenters/templates/Sport/default.latte

use Latte\Runtime as LR;

class Template188b150838 extends Latte\Runtime\Template
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
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<style> 
.text label { color: pink};
</style>
<h1> Přidat produkt do obchodu </h1>
<?php
		/* line 8 */ $_tmp = $this->global->uiControl->getComponent("sport");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		
	}

}
