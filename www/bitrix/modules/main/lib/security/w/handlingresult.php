<? namespace Bitrix\Main\Security\W; use Bitrix\Main\Security\W\Rules\Rule; use Bitrix\Main\Security\W\Rules\Results\RuleResult; class HandlingResult{ protected string $_1995024649; protected array $_585888527; protected RuleResult $_182547514; protected Rule $_1871968407;  public function __construct(string $_1995024649, array $_585888527, RuleResult $_182547514, Rule $_1871968407){ $this->_1995024649= $_1995024649; $this->_585888527= $_585888527; $this->_182547514= $_182547514; $this->_1871968407= $_1871968407;} public function getContextName(): string{ return $this->_1995024649;} public function setContextName(string $_1995024649): void{ $this->_1995024649= $_1995024649;} public function getContextKey(): array{ return $this->_585888527;} public function setContextKey(array $_585888527): void{ $this->_585888527= $_585888527;} public function getRuleResult(): RuleResult{ return $this->_182547514;} public function setRuleResult(RuleResult $_182547514): void{ $this->_182547514= $_182547514;} public function getRule(): Rule{ return $this->_1871968407;} public function setRule(Rule $_1871968407): void{ $this->_1871968407= $_1871968407;}}?>