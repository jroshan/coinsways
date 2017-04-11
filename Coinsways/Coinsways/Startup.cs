using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Coinsways.Startup))]
namespace Coinsways
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
