using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Coinsways.ViewModels
{
    public class ChildUserVM
    {
        public string Name { get; set; }
        public string ParentUser { get; set; }
        public DateTime CreatedDate { get; set; }
        public decimal Deposits { get; set; }
        public DateTime LastLogin { get; set; }
        public int TreeLevel { get; set; }
    }
}