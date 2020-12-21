<?php
/**
 * @Desc:
 * @author: hbh
 * @Time: 2020/12/18   8:28
 */

namespace bydls\git\base;


class base
{
    protected $project_dir;
    protected $branch_prefix;
    protected $branch;
    protected $tag;

    /**获取项目地址
     * @return mixed
     * @author: hbh
     * @Time: 2020/12/18   8:34
     */
    public function getProjectDir()
    {
        return $this->project_dir;
    }

    /**设置项目地址
     * @param String $project_dir
     * @author: hbh
     * @Time: 2020/12/18   8:34
     */
    public function setProjectDir(String $project_dir)
    {
        $this->project_dir = $project_dir;
    }

    /**获取分支前缀
     * @return mixed
     * @author: hbh
     * @Time: 2020/12/18   8:34
     */
    public function getBranchPrefix()
    {
        return $this->branch_prefix;
    }

    /**设置分支前缀
     * @param String $branch_prefix
     * @author: hbh
     * @Time: 2020/12/18   8:34
     */
    public function setBranchPrefix(String $branch_prefix)
    {
        $this->branch_prefix = $branch_prefix;
    }

    /**获取分支名称
     * @return mixed
     * @author: hbh
     * @Time: 2020/12/18   8:40
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**设置分支名称
     * @param string $branch
     * @author: hbh
     * @Time: 2020/12/18   8:40
     */
    public function setBranch(string $branch)
    {
        $this->branch = $branch;
    }

    /**获取标签
     * @return mixed
     * @author: hbh
     * @Time: 2020/12/18   8:40
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**设置标签
     * @param $tag
     * @author: hbh
     * @Time: 2020/12/18   8:41
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }
}