<?php
declare (strict_types=1);

namespace Neos\Rector\ContentRepository90\Rules\Traits;

use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Variable;

trait SubgraphTrait
{
    use NodeTrait;

    /**
     * @var \Rector\Core\PhpParser\Node\NodeFactory
     */
    protected $nodeFactory;


    private function subgraph_findChildNodes(Variable $nodeVariable): Expr
    {
        return $this->nodeFactory->createMethodCall(
            'subgraph',
            'findChildNodes',
            [
                $this->node_nodeAggregateIdentifier($nodeVariable)
            ]
        );
    }

    private function subgraph_findNodePath(Variable $nodeVariable): Expr
    {
        return $this->nodeFactory->createMethodCall(
            'subgraph',
            'findNodePath',
            [
                $this->node_nodeAggregateIdentifier($nodeVariable)
            ]
        );
    }



    private function subgraph_findNodeByNodeAggregateIdentifier(Expr $nodeAggregateIdentifier)
    {
        return $this->nodeFactory->createMethodCall(
            'subgraph',
            'findNodeByNodeAggregateIdentifier',
            [
                $nodeAggregateIdentifier
            ]
        );
    }

}